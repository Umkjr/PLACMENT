function f1 () 
{
    var x=document.getElementById('degreetype').value; 
    if (x==0) 
    {
        document.getElementById('degreeresult').innerHTML='<font color="red">Please Select your Degree Type ';
    };
    if (x==1) 
    {
     document.getElementById('degreeresult').innerHTML=
     '<div class="form-group"><label class="sr-only">Semester 3 Pointer</label><input type="text" name="sem3" placeholder= "Semester 3 Pointer..." class="f1-first-name form-control"></div><div class="form-group"><label class="sr-only">Semester 4 Pointer</label><input type="text" name="sem4" placeholder= "Semester 4 Pointer..." class="f1-first-name form-control"></div><div class="form-group"><label class="sr-only">Semester 5 Pointer</label><input type="text" name="sem5" placeholder= "Semester 5 Pointer..." class="f1-first-name form-control"></div><div class="form-group"><label class="sr-only">Semester 6 Pointer</label><input type="text" name="sem6" placeholder= "Semester 6 Pointer..." class="f1-first-name form-control"></div>'
    };

    if (x==2) 
    {
     document.getElementById('degreeresult').innerHTML=
     '<div class="form-group"><label class="sr-only">Semester 1 Pointer</label><input type="text" name="sem1" placeholder= "Semester 1 Pointer..." class="f1-first-name form-control"></div><div class="form-group"><label class="sr-only">Semester 2 Pointer</label><input type="text" name="sem2" placeholder= "Semester 2 Pointer..." class="f1-first-name form-control"></div>   <div class="form-group"><label class="sr-only">Semester 3 Pointer</label><input type="text" name="sem3" placeholder= "Semester 3 Pointer..." class="f1-first-name form-control"></div><div class="form-group"><label class="sr-only">Semester 4 Pointer</label><input type="text" name="sem4" placeholder= "Semester 4 Pointer..." class="f1-first-name form-control"></div><div class="form-group"><label class="sr-only">Semester 5 Pointer</label><input type="text" name="sem5" placeholder= "Semester 5 Pointer..." class="f1-first-name form-control"></div><div class="form-group"><label class="sr-only">Semester 6 Pointer</label><input type="text" name="sem6" placeholder= "Semester 6 Pointer..." class="f1-first-name form-control"></div>'
    };

    
        return false;
}