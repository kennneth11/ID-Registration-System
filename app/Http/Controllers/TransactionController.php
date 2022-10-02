<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{



    public function store( Request $request)
    {
        $active = Transaction::where('id_number', $request->studentnumber)
            ->where('active', true)->exists();

        
        $validator = $request->validate([
            'or_number'=>  ['required', 'unique:transactions'],
            'studentnumber'=>  ['required'],
            'firstname'=>  ['required'],
            'middlename'=>  ['required'],
            'lastname'=>  ['required'],
            'bloodtype'=>  ['required'],
            'gender'=>  ['required'],
            'date_birth'=>  ['required'],
            'mobileNumber'=>  ['required'],
            'perm_address'=>  ['required'],
            'prog_name'=>  ['required'],
            'collegeName'=>  ['required'],
            'emergency_contact'=>  ['required'],
            'emergency_mobileNo'=>  ['required'],
            'emergency_address'=>  ['required'],

            'picture'=> ['required'],
            'signature'=> ['required'],
        ]);


        if(!$active)
        {
        
            $transaction = new Transaction();
            $transaction->or_number = $request->or_number;
            $transaction->id_number = $request->studentnumber;
            $transaction->first_name = $request->firstname;
            $transaction->miidle_name = $request->middlename;
            $transaction->last_name = $request->lastname;
            $transaction->blood_type = $request->bloodtype;
            $transaction->gender = $request->gender;
            $transaction->date_of_birth = $request->date_birth;
            $transaction->mobile_Number = $request->mobileNumber;
            $transaction->address = $request->perm_address;
            $transaction->course = $request->prog_name;
            $transaction->college = $request->collegeName;
            $transaction->emergency_contact = $request->emergency_contact;
            $transaction->emergency_mobileNo = $request->emergency_mobileNo;
            $transaction->emergency_address = $request->emergency_address;


            $idPictureName = $request->or_number.'picture.jpg';
            $filePicture = $request->picture;
            $filePicture->move('ID-Credidials/id-picture/', $idPictureName); 
            $transaction->file_path_picture = 'ID-Credidials/id-picture/'.$idPictureName;

            $idSignatureName = $request->or_number.'picture.jpg';
            $fileignature = $request->signature;
            $fileignature->move('ID-Credidials/id-signature/', $idSignatureName); 
            $transaction->file_path_singature = 'ID-Credidials/id-signature/'.$idSignatureName;
        
            $transaction->status = 'pending';
            $transaction->active = 'true';
            $transaction->save();

            return redirect()->route('dashboard');

        } 
        else
            return redirect()->route('dashboard')->with('failed','You have active transaction.');
    } 

    public function delete(Request $request)
    {
        $transaction = Transaction::where('or_number', '=', $request->input('transaction-delete'));
        $transaction->delete();
        return redirect()->route('dashboard');
    }

    public function update(Request $request)
    {
        $request->validate([
            'blood_type_edit'=>  ['required'],
            'mobile_number_edit'=>  ['required'],
            'address_edit'=>  ['required'],
            'contact_person_name_edit'=>  ['required'],
            'contact_person_number_edit'=>  ['required'],
            'contact_person_address_edit'=>  ['required'],
        ]);

        Transaction::where("or_number",  $request->input('or_number'))->update(
                ["blood_type" => $request->blood_type_edit],
                ["mobile_Number" => $request->mobile_number_edit],
                ["address" => $request->address_edit],
                ["emergency_contact" => $request->contact_person_name_edit],
                ["emergency_mobileNo" => $request->contact_person_number_edit],
                ["emergency_address" => $request->contact_person_address_edit]
            );

            if(!empty($request->picture_edit))
            {
                $idPictureName = $request->or_number.'picture.jpg';
                $filePicture = $request->picture_edit;
                $filePicture->move('ID-Credidials/id-picture/', $idPictureName);
                
            }

            if(!empty($request->signature_edit))
            {
                $idSignatureName = $request->or_number.'picture.jpg';
                $fileignature = $request->signature_edit;
                $fileignature->move('ID-Credidials/id-signature/', $idSignatureName); 
                
            }

        return redirect()->route('dashboard');
    }

    public function myTransactions(){
        $transactions = Transaction::where('id_number', '=', Auth::user()->id)->get();

        return view('student/transactions')
            ->with(['transactions'=>$transactions]);
    }


    public function showPrint(Request $request)
    {
        $transactions = Transaction::where('or_number', '=', $request->key)
                ->where('active', '=', 1)
                ->first();

        return view('administrator/transaction-print')
            ->with('transactions', $transactions);
    }



}
