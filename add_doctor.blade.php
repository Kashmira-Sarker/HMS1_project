<!DOCTYPE html>
<html lang="en">



<head>
    @include('admin.css')
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
      <div class="header-left">
        <a href="index-2.html" class="logo">
          <img src="admin/assets/img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
        </a>
      </div>
      <x-app-layout>
            </x-app-layout>
          
        #sidebar here starts

        @include('admin.sidebar')
        <div class="page-wrapper">

          <div class="container" align="center" style="padding-top: 10px;">
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/from-data">
              @csrf
              <div style="padding:15px;">
                <label>Doctor's Name</label>
                <input type="text" style="color:black;" name="name">
              </div>
              <div style="padding:15px;">
                <label>phone number</label>
                <input type="number" style="color:black;" name="number">
              </div>
              <div style="padding:15px;">
                <label>room number</label>
                <input type="number" style="color:black;" name=" room number">
              </div>
              <div style="padding:15px;">
                <label>Speciality</label>
                <select>
                  <option>--select--</option>
                  <option value="heart">heart</option>
                  <option value="skin">skin</option>
                  <option value="Neurospecialist">Neurospecialist</option>
                  <option value="eye">eye</option>
                </select>
              </div>
              <div style="padding:15px;">
                
                <input type="submit"  style="color:black;" class="btn btn-success">
              </div>
            </form>
          </div>

         </div> 
    <div class="sidebar-overlay" data-reff=""></div>
    @include('admin.script')

</body>



</html>