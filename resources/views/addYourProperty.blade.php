@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/addYourProperty.css')}}">



<form action="{{route('addYourProperty')}}" method="post" enctype="multipart/form-data"> <br><br> @csrf
<div class="form addProperty"> 
    <h2>Add new property</h2>
    <div class="decorationBar"></div>    
    <label>
      <span>Unit Number</span>
      <input type="text" name="propertyName" />
    </label><br>
    <label>
      <span>Street</span> 
      <input type="text" name="location" />
    </label><br>
    <label>
      <span>Area</span> 
      <input type="text" name="area" />
    </label><br>
    <label>
    <label><span> District </span>
     <select name="district">
      <option value="">Select the district below</option>
      <option value="Johor Bahru">Johor Bahru</option>
      <option value="Larkin">Larkin</option>
      <option value="Tampoi">Tampoi</option>
      <option value="Kempas">Kempas</option>
      <option value="Skudai">Skudai</option>
      <option value="Ulu Tiram">Ulu Tiram</option>
      <option value="Plentong">Plentong</option>
      <option value="Masai">Masai</option>
      <option value="Pasir Gudang">Pasir Gudang</option>
      <option value="Kota Iskandar">Kota Iskandar</option>
      <option value="Gelang Patah">Gelang Patah</option>
      <option value="Senai">Senai</option>
      <option value="Kangkar Pulai">Kangkar Pulai</option>
      <option value="Tanjung Kupang">Tanjung Kupang</option>
      <option value="Tanjung Pelepas">Tanjung Pelepas</option>
      <option value="Danga Bay">Danga Bay</option>
      <option value="Puteri Harbour">Puteri Harbour</option>
      </select>
    </label><br>
      <span>Price</span>
      <input type="text" name="price" />
    </label><br>
    <label><span> Purpose </span>
     <select name="publishFunction">
      <option value="">Select the option below</option>
      <option value="Sell">Sell</option>
      <option value="Rent">Rent</option>
      </select>
    </label><br>
    <label>
      <span>House size</span>
      <input type="text" name="size" />
    </label><br>
    <label>
    <label>
      <span>House facing</span>
      <input type="text" name="facingDirection"/>
    </label><br>
    <label><span> Room </span>
     <select name="bedroom">
      <option value="">Select the number below</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>  
      <option value="5">5</option>
      </select>
    </label><br>
    <label><span> Washroom </span>
     <select name="washroom">
      <option value="">Select the number below</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>  
      <option value="5">5</option>
      </select>
    </label><br>
    <label><span>Furniture</span>
      <select name="furniture">
      <option value="">Select the option below</option>
      <option value="No">No</option>
      <option value="Partial">Partial</option>
      <option value="Fully">Fully</option>
      </select>
    </label><br>
    <label>
      <span>Gated and guarded</span>
      <select name="gateGuarded">
      <option value="">Select the option below</option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
      </select>
    </label><br>
    <label>
      <span>House extended</span>
      <select name="extension">
      <option value="">Select the option below</option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
      </select>
    </label><br>
    <label>
      <span>Type</span>
      <select name="type"> 
      <option value="">Select the option below</option>
      <option value="Apartment">Apartment</option>
      <option value="Double-Storey">Double-Storey</option>
      <option value="Single-Storey">Single-Storey</option>
      <option value="Semi-D">Semi-D</option>
      <option value="Cluster">Cluster</option>
      <option value="Bungalow">Bungalow</option>
      </select>
    </label><br>
    <label>
      <span>Renovation</span>
      <select name="renovation">
        <option value="">Select the option below</option>
        <option value="No">No</option>
        <option value="Partial">Partial</option>
        <option value="Fully">Fully</option>
      </select>
    </label><br><br>
    <label>
      <span>Description</span>
      <input type="text" name="description"/>
    </label><br><br>
      <span>Upload property photo</span>
      <input type="file" name="propertyPic[]" multiple> <br><br>
          <form action="{{route('addProperty')}}"><button  class="btnDeco">Back</button></form>
        <button type="submit" class="btnDeco">Submit</button>
       
          </div>
        </div>
      </div>
    </label>
  </div>
 </div>
</form>


@endsection