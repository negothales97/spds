<?php

use App\State;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

function getStates()
{
    $states = State::all();
    return json_encode($states);
}

function validateFormation(Request $request)
{
    $request->validate([
        'name' => "required|max:191",
        'country_id' => "required",
        'state_id' => "",
        'level_id' => "required",
        'course_id' => "required",
        'situation' => "required",
        'start_month' => "required",
        'start_year' => "required",
        'finish_month' => "",
        'finish_year' => "",
        'student_id' => "",
    ]);
    $data = $request->except('_token', 'formation_id');
    return $data;
}

function validateProfessional(Request $request)
{
    $request->validate([
        'name' => "required|max:191",
        'occupation' => "required",
        'hierarchy_id' => "required",
        'description' => "required|max:2000",
        'country_id' => "required",
        'state_id' => "",
        'city_id' => "",
        'start_month' => "required",
        'start_year' => "required",
        'finish_month' => "",
        'finish_year' => "",
        'student_id' => "",
    ]);
    $data = $request->except('_token', 'professional_id');
    return $data;
}

function validateLanguage(Request $request)
{
    $request->validate([
        'language_id' => "required",
        'level' => "required",
        'student_id' => "",
    ]);
    $data = $request->except('_token', 'lang_id');
    return $data;
}

function validateKnowledge(Request $request)
{
    $request->validate([
        'knowledge_id' => "required",
        'subknowledge_id' => "required",
        'student_id' => "",
    ]);
    $data = $request->except('_token', 'know_id');

    return $data;
}

function validateStudent(Request $request)
{
    $request->validate([
        'name' => "required|max:191",
        'phone' => "required",
        'cpf'   => "required",
    ]);

    if(!isset($request->student_id)){
        $request->validate([
            'password'  => "required|confirmed|min:6",
            'email' => "required|unique:students",
        ]);
    }else{
        $request->validate([
            'email'               => [
                'required',
                Rule::unique('students')->ignore($request->student_id)
            ],
        ]);
    }
    
    $data = $request->except('_token', 'student_id', 'thumbnail');
    if(isset($request->password)){
        $data['password'] =  bcrypt($request->password);
    }
    return $data;
}

function validateServices(Request $request)
{
    $request->validate([
        'name' => "required|max:191",
        'phone' => "required",
        'document_number' => "required",
        'occupation_area_id' => "required",
        'description' => "required|max:2000",
    ]);

    if(!isset($request->furnisher_id)){
        $request->validate([
            'password'  => "required|confirmed",
            'email' => "required|unique:furnishers",
        ]);
    }else{
        $request->validate([
            'email'               => [
                'required',
                Rule::unique('furnishers')->ignore($request->furnisher_id)
            ],
        ]);
    }
    $data = $request->except('_token', 'furnisher_id', 'logo');
    if(isset($request->password)){
        $data['password'] =  bcrypt($request->password);
    }
    return $data;
}

function validateCompany(Request $request)
{
    $request->validate([
        'name' => "required|max:191",
        'phone' => "required",
        'trade' => "required",
        'cnpj' => "required",
        'mensality' => "required",
        'zip_code' => "required",
        'street' => "required",
        'number' => "required",
        'neighborhood' => "required",
        'state_id' => "required",
        'city_id' => "required",
    ]);

    if(!isset($request->company_id)){
        $request->validate([
            'password'  => "required|confirmed",
            'email' => "required|unique:companies",
        ]);
    }else{
        $request->validate([
            'email'               => [
                'required',
                Rule::unique('companies')->ignore($request->company_id)
            ],
        ]);
    }
    $data = $request->except('_token', 'company_id');
    $data['mensality'] = convertMoneyBraziltoUSA($data['mensality']);
    if(isset($request->password)){
        $data['password'] =  bcrypt($request->password);
    }
    return $data;
}

function validateCoupon(Request $request)
{
    $validity = convertDateBraziltoUSA($request->validity);
    $validity = strtotime($validity);
    
    $request->validate([
        'code' => "required|max:191",
        'value' => "required",
    ]);
        
    if($validity <= strtotime("today")){
        $request->validate([
            'validity' => "required|after:today",
        ]);
    }
    $data = $request->except('_token', 'coupon_id');

    $data['validity'] = date("Y-m-d" , $validity);
    $data['value'] = convertMoneyBraziltoUSA($data['value']);
    
    return $data;
}

function validateLink(Request $request)
{
    $request->validate([
        'title' => "required|max:191",
        'url'   => "required",
    ]);
   
    $data = $request->except('_token', 'link_id');
    
    return $data;
}

function validateToolsMarketing(Request $request)
{
    $request->validate([
        'title' => "required|max:191",
        'document' => "required",
    ]);
    $hasFile = $request->hasFile('document');
    $data = $request->except('_token', 'tool_id');
    if($hasFile){
        $data['document'] = saveDocument($request);
    }
    return $data;
}

function validateContentMarketing(Request $request)
{
    $request->validate([
        'title' => "required|max:191",
        'document' => "required",
    ]);
    $hasFile = $request->hasFile('document');
    $data = $request->except('_token', 'content_id');
    if($hasFile){
        $data['document'] = saveDocument($request);
    }
    return $data;
}

function sortNameGenerate()
{
    $str = "";
    $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
    $max = count($characters) - 1;

    for ($i = 0; $i < 7; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}

function convertMoneyBraziltoUSA($value)
{
    $value = str_replace(',','.', str_replace('.','', $value));

    return $value;
}
function convertMoneyUSAtoBrazil($value)
{
    $value = number_format($value, 2, ',', '.');

    return $value;
}

function convertDateBraziltoUSA($date)
{
    $date = implode("-", array_reverse(explode("/", $date)));

    return $date;
}
function convertDateUSAtoBrazil($date)
{
    $date = implode("/", array_reverse(explode("-", $date)));

    return $date;
}

function imgValidate($path, $file, $database, $database_file)
{
    $originalPath = public_path() . $path;
    $arq_img = $file;
    $name = basename($arq_img->getClientOriginalName());
    $type = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    $count = 1;
    while ($count != 0) {
        $str = sortNameGenerate();
        $count = DB::table($database)->where($database_file, $str)->count();
    }
    $arq_img_name = $str . '.' . $type;
    $image = Image::make($arq_img);
    $image->resize(300, null, function ($constraint) {
        $constraint->aspectRatio();
    });
    $image->save($originalPath . $arq_img_name);
    return $arq_img_name;
}

function saveDocument(Request $request)
{
    $request->validate([
        'document' => 'mimes:pdf,xlsx,xls,ppt,pptx,doc,docx,otp,odp,ods,odt,pps,psd'
    ]);
    $hasFile = $request->hasFile('document');
    $fileIsValid = $request->file('document')->isValid();
    if($hasFile && $fileIsValid){
        $file = $request->document;
    }
    $upload = $file->store('arquivos');
    return $upload;
}


