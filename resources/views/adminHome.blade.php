@extends('admin')
@section('content')

<link rel="stylesheet" href="{{asset('css/adminHome.css')}}">


   <div class="adminHomeContainer">
      <div class="adminHomeContent">
        <h2 class="numberUser">NO</h2>
        <h2 class="adminUserName">Name</h2>
        <h2 class="phoneNo">Property Type</h2>
        <h2 class="propertyDistrict">District</h2>
        <h2 class="propertyArea">Area</h2>
        <h2 class="propertyStreet">Street</h2>
        <table>
         <td>
        <p class="displayUserNumber">1</p>
        </td>
        <td>
        <p class="displayUserName">Villa Bestari</p>
        </td>
        <td>
        <p class="displayPhoneNo">Apartment</p>
        </td>
        <td>
        <p class="displayDistrict">Skudai</p>
        </td>
        <td>
        <p class="displayArea">Taman Nusa Bestari 2</p>
        </td>
        <td>
        <p class="displayStreet">Jalan NB2 10/2</p>
        </td>
        </table>
      </div>
   </div>
@endsection