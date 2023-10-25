<?php

namespace Controller;

use Model\Employees;
use Model\DisEmp;
use Model\Subdivisions;
//use Model\Post;
use Model\Disciplines;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Src\Validator\Validator;

class Site
{
    public function hello(): string
    {
        return new View('site.hello', ['message' => 'Учебно-методическое управление']);
    }

    public function employee(): string
    {
        $employees = Employees::all();
        return new View('site.employees', ['employees' => $employees]);
    }
    public function addEmployee(Request $request): string
    {
        if ($request->method === 'POST') {
            $employee = Employees::create($request->all());
//            var_dump($_FILES['photo']); die();
            $employee->photo($_FILES['photo']);
            $employee->save();
            app()->route->redirect('/employees');
        }
        return new View('site.addEmployees');
    }

    public function employeeProfile (Request $request): string
    {
        $disciplines = Disciplines::all();
        $employees = Employees::where('id', $request->id)->get();
        $disEmp = DisEmp::where('id', $request->id)->get();
        $subdivisions = Subdivisions::where('id', $request->id)->get();
        return (new View())->render('site.employeeProfile', ['disciplines' => $disciplines, 'employees'=>$employees, 'disEmp'=>$disEmp, 'subdivisions'=>$subdivisions]);

    }
    public function discipline(): string
    {
        return new View('site.disciplines',);
    }

    public function subdivision(): string
    {
        return new View('site.subdivisions',);
    }

    public function error(): string
    {
        return new View('site.errors',);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'login' => ['required', 'unique:users,login'],
                'password' => ['required']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if ($validator->fails()) {
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/login');
            }
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function addDisciplineEmployee(Request $request)
    {
        DisEmp::create([
            'employee_id'=>$request->id_employee,
            'discipline_id'=>$request->id_discipline,
        ]);
        return new View('site.employeeProfile');
    }
}
