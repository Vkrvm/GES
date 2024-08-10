<h1>New Employee Record</h1>

<h2>Full Name: {{$data->name}} </h2>
<h2>Email address: {{$data->email}} </h2>
<h2>Phone: {{$data->phone}} </h2>
<h2>Address: {{$data->address}} </h2>
<h2>Gender: {{$data->gender}} </h2>
<h2>Marital Status: {{$data->maritalStatus}} </h2>
<h2>Recruitment Status: {{$data->recruitmentStatus}} </h2>
<h2>Qualification: {{$data->qualification}} </h2>
<h2>Graduation Year: {{$data->graduationYear}} </h2>
<h2>Job Position: {{$data->jobPosition}} </h2>
@if($data->otherJobPosition)
other Job Position: {{$data->otherJobPosition}} </h2>
@endif
