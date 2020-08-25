<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ProjectController extends Controller
{
    public function showProjectAdd()
    {
        return view('back_end.project.add');
    }

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
            'project_budget' => ['required', 'numeric', 'max:10'],
            'project_status' => 'required',
            'project_des' => ['nullable', 'string']
        ]);

        if ($validator->fails()) {
            return redirectBackWithValidationError($validator);
        }

        $project = new Project();

        $project->project_client_id = $client->id;
        $project->project_name = $request->input('project_name');
        $project->project_id = $request->input('project_id');
        $project->project_location = $request->input('project_location');
        $project->project_status = $request->input('project_status');
        $project->project_des = $request->input('project_des');
        $project->project_img = $request->input('project_img');

        $project->save();



    }

    /**
     * @param array $data
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createNewClient(array $data)
    {
        $validator = Validator::make($data, [
            'first_name' => ['required', 'string', 'max:65'],
            'last_name' => ['required', 'string', 'max:65'],
            'mobile' => ['required', 'numeric', 'max:50'],
            'email' => ['required', 'nullable', 'email', 'max:50'],
            'address' => ['required', 'nullable', 'string', 'min:5', 'max:50']
        ]);

        if ($validator->fails()) {
            return redirectBackWithValidationError($validator);
        }

        $client_role_id = Role::whereRoleSlug('client')->firstOrFail();

        $client = new User();

        $client->role_id = $client_role_id->id;
        $client->first_name = $data['first_name'];
        $client->last_name = $data['last_name'];
        $client->email = $data['email'];
        $client->mobile = substr($data['mobile'], -10);
        $client->address = $data['address'];

        $client->save();
    }

}
