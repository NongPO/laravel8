<div class="row">
    <div class="form-group col-lg-6">
        <label class="control-label">{{ 'Name' }}</label>
        <input class="form-control form-control-sm" name="Name" type="text" value="{{ isset($staff->Name) ? $staff->Name : ''}}" >     
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Age' }}</label>
        <input class="form-control form-control-sm" name="Age" type="number" value="{{ isset($staff->Age) ? $staff->Age : ''}}" > 
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'salary' }}</label>
        <input class="form-control form-control-sm" name="salary" type="number" value="{{ isset($staff->salary) ? $staff->salary : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Phone' }}</label>
        <input class="form-control form-control-sm" name="Phone" type="number" value="{{ isset($staff->Phone) ? $staff->Phone : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Action' }}</label>
        <input class="form-control form-control-sm" name="Action" type="text" value="{{ isset($staff->Action) ? $staff->Action : ''}}" >    
    </div>
    
</div>

