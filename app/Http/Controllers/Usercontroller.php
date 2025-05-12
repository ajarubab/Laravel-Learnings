<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class Usercontroller extends Controller
{
    // Reusable private method to return user-related data
    private function getUserData()
    {
        return [
            'meraNaam' => 'Rajat Thakur',
            'restUsers' => ['tom', 'sam', 'nik', 'zen']
        ];
    }

    public function showMyName()
    {
        $userData = $this->getUserData();
        $msg = 'Hello from user view';
        return view('user', $userData, ['message' => $msg]);
    }

    public function showAssignment()
    {
        $assignment = new \stdClass();
        $assignment->title = 'Math Homework';
        $assignment->submitted = false;

        $userData = $this->getUserData(); // reusing data

        return view('assignment', array_merge(
            compact('assignment'),
            $userData
        ));
    }

    /**
     * email regex meaning
     *
     * ^                                 # Start of string
     * (?!.*\.\.)                        # Ensures that the string does not contain two consecutive dots (..) anywhere.
     * [a-zA-Z0-9._-]{3,}                # Contain at least 3 characters made of letters, digits, dots, underscores, or hyphens.
     * @                                 # Matches the literal @ symbol separating local part from domain.
     * [a-zA-Z]{2,}                      # match at least 2 letters (uppercase or lowercase) for start of domain name
     * [a-zA-Z0-9-]*                     # match zero or more letters, digits, or hyphens for domain name optionally.
     * (\.[a-zA-Z]{2,})+                 # match a dot . and the atleat 2 letters having multiple segments for TLD(top level domain).
     * $                                 # End of string
     *
     * create password regex meaning
     *
     * ^                                 # Start of string
     * (?=.*[A-Z])                       # Must contain at least one uppercase letter
     * (?=.*[a-z])                       # Must contain at least one lowercase letter
     * (?=.*\d)                          # Must contain at least one digit
     * (?=.*[@$!%*?&#])                   # Must contain at least one special character from [@,$,!,%,*,?,&,#]
     * [A-Za-z\d@$!%*?&#]{8,}             # Allowed characters [alphabets, digits,@,$,!,%,*,?,&,#](only these), and at least 8 characters long
     * $                                 # End of string

     */

    function getUserFormData(Request $req)
    {
        $req->validate(
            [
                'username' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3'],
                'email' => ['required', 'email', 'regex:/^(?!.*\.\.)[a-zA-Z0-9._-]{3,}@[a-zA-Z]{2,}[a-zA-Z0-9-]*(\.[a-zA-Z]{2,})+$/'],
                'phone' => ['required', 'numeric', 'digits:10', 'regex:/^[6-9]/'],
                'create_password' => [
                    'required',
                    Password::min(8)        // Minimum 8 characters
                        ->letters()     // At least one letter
                        ->mixedCase()  // At least one uppercase and one lowercase letter
                        ->numbers()    // At least one number
                        ->symbols()    // At least one symbol
                        ->uncompromised(), // Not in known data leaks
                ],
                'confirm_password' => ['required', 'same:create_password'],
                'skill' => 'required',
                'gender' => 'required',
                'city' => 'required',
                'age' => ['required', 'integer', 'between:1,65'],
                'dob' => ['required', 'date', 'before:today'],
                'document' => ['required', 'file', 'mimes:pdf,docx,xlsx,xls', 'max:2048'],
            ],
            [
                'username.required' => "Username can't be empty.",
                'username.min' => "Username should contain at least 3 characters.",
                'username.regex' => "Username should contain characters and spaces only.",
                'email.required' => "User Email can't be empty.",
                'phone.required' => "User Phone number can't be empty.",
                'phone.regex' => "Phone number must start with 6,7,8 or 9",
                'create_password.required' => "Create Password field can't be empty.",
                'create_password.regex' => "password must contain atlest one uppercase letter, one lowercase letter, one digit and one special character.",
                'confirm_password.required' => "Confirm Password field can't be empty.",
                'confirm_password.same' => "Password confirmation failed, please try again.",
                'skill.required' => "You need to have atleast one skill.",
                'gender.required' => "Please choose your gender.",
                'city.required' => "Please choose your City.",
                'document.required' => "Please choose file.",
                'document.mimes' => 'Only DOCX, Excel, or PDF files are allowed.',
                'document.max' => 'The document must not be larger than 2MB.',
            ]
        );
        $data = $req->except('document'); // get all inputs except file

    if ($req->hasFile('document')) {
        $file = $req->file('document');
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('uploads', $filename, 'public');
        $url = asset('storage/' . $path);

        // Add file details to response data
        $data['document'] = [
            'uploaded_file' => $file->getClientOriginalName(),
            'size' => ($file->getSize()/1000).' KB',
        ];
    }

    return response()->json($data);
}
}
