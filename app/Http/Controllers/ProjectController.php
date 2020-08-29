<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function showProjectAdd()
    {
        return view('back_end.project.add')->with([
            'clients' => Role::whereRoleSlug('client')->firstOrFail()->users()->orderBy('first_name')->get()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processProjectAdd(Request $request)
    {
        $client = null;
        if ($request->post('client_type') == 'old') {
            $client = Role::whereRoleSlug('client')->firstOrFail()
                ->users()
                ->find($request->post('client_id'));
        }
        if ($request->post('client_type') == 'new') {
            $client = $this->createNewClient($request->all());
        }

        $validator = Validator::make($request->all(), [
            'project_name' => ['required', 'string', 'max:75'],
            'project_location' => ['required', 'string', 'max:150'],
            'project_budget' => ['required', 'numeric'],
            'project_status' => 'required',
            'project_des' => ['nullable', 'string']
        ]);

        if ($validator->fails()) {
            return redirectBackWithValidationError($validator);
        }
//        try {
            $project = new Project();

            $project->project_client_id = $client->id;
            $project->project_name = $request->input('project_name');
            $project->project_id = getUniqueCode('project');
            $project->project_location = $request->input('project_location');
            $project->project_status = $request->input('project_status');
            $project->project_des = $request->input('project_des');
            $project->project_budget = $request->input('project_budget');
            $project->save();

            addActivity('project', $project->id, 'Project Updated Successfully');

            session()->flash('message', 'Project Created successfully!');
            session()->flash('type', 'success');

//        } catch (Exception $exception) {
//            session()->flash('message', 'May be you made some mistake on project part'.' <==> ' . $exception->getMessage());
//            session()->flash('type', 'danger');
//        }
        return redirect()->back();
    }


    /**
     * @param array $data
     * @return User|\Illuminate\Http\RedirectResponse
     */
    protected function createNewClient(array $data)
    {
        $validator = Validator::make($data, [
            'first_name' => ['required', 'string', 'max:65'],
            'last_name' => ['required', 'string', 'max:65'],
            'mobile' => ['required', 'numeric'],
            'email' => ['required', 'nullable', 'email'],
            'address' => ['required', 'nullable', 'string', 'max:500']
        ]);

        if ($validator->fails()) {
            return redirectBackWithValidationError($validator);
        }


//        try {
            $client_role_id = Role::whereRoleSlug('client')->firstOrFail();

            $client = new User();

            $client->role_id = $client_role_id->id;
            $client->first_name = $data['first_name'];
            $client->last_name = $data['last_name'];
            $client->email = $data['email'];
            $client->mobile = substr($data['mobile'], -10);
            $client->address = $data['address'];
            $client->save();

            session()->flash('message', 'Client Created successfully!');
            session()->flash('type', 'success');

            addActivity('user',$client->id,'Client Created Successfully!');

            return $client;

//        } catch (Exception $exception) {
//            session()->flash('message', 'May be you made some mistake on client part'.'==>>' . $exception->getMessage());
//            session()->flash('type', 'danger');
//        }
    }

}
