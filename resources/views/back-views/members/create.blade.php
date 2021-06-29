@extends('layout.back-end.app')
@section('content')
<div class="col-md-12">
    <!-- Default Elements -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Create  Member </h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
                <form role="form" action="{{ route('members.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="form-group row">
                    
                        <div class="col-md-6">
                            <label class="col-12" for="example-text-input">Name</label>
                            <input type="text"  class="form-control" id="example-text-input" name="name" placeholder="Text..">
                            
                        </div>
                        <div class="col-md-6">
                            <label class="col-12" for="example-text-input">Select Member Type</label>
                        <select name="type"  class="form-control" id="selector"  >
                            <option value="0">Ec Committee Member </option>
                            <option value="1">Honor Board Member </option>
                            <option id="option" class="member" value="2"> Members</option>
                            <option value="3" id="option">Donar </option>

                            </select>                          
                        </div>
                  
                    
                </div>
                {{-- for donor --}}
                <div class="from-group" id="donor" style="display: none;">
                    <div class="col-md-12">
                        <label class="col-12" for="example-text-input"> Address</label>
                        <textarea type="text"  class="form-control" cols="4" rows="6" name="address" placeholder="Text.."></textarea>
                    </div>
                </div>
              
                {{-- For member  --}}
                <div class="form-group " style="display: none;" id="member"  >
                    <div class="row">
                        <div class="col-md-6">
                            <label class="col-12" for="example-text-input">Father Name</label>
                            <input type="text"  class="form-control" id="example-text-input" name="father" placeholder="Text..">
                        </div>
                        <div class="col-md-6">
                            <label class="col-12" for="example-text-input">Mother Name</label>
                            <input type="text"  class="form-control" id="example-text-input" name="mother" placeholder="Text..">
                        </div>
         
                        <div class="col-md-6">
                            <label class="col-12" for="example-text-input">Phone</label>
                            <input type="text"  class="form-control" id="example-text-input" name="phone" placeholder="Phone..">
                        </div>
                        <div class="col-md-6">
                            <label class="col-12" for="example-text-input">Email Address</label>
                            <input type="email"  class="form-control" id="example-text-input" name="email" placeholder="Email..">
                        </div>
                        <div class="col-md-6">
                            <label class="col-12" for="example-text-input">Present Address</label>
                            <textarea type="text"  class="form-control" cols="4" rows="6" name="presentAddress" placeholder="Text.."></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="col-12" for="example-text-input">Permanent Address</label>
                            <textarea type="text"  class="form-control" cols="4" rows="6" name="permanentAddress" placeholder="Text.."></textarea>
                        </div>
                    </div>
                </div>
             <div class="form-group">
                 <div class="col-12">
                    <label class="col-12" for="example-text-input">Designation</label>
                    <input type="text"  class="form-control" id="example-text-input" name="designation" placeholder="Text..">
                    
                 </div>
             </div>

           

               
                <div class="form-group row">
                    <label class="col-12" for="example-file-input">Member Image Privew</label>
                    <div class="col-12">
                      
                                <center>
                                    <div class="fileinput-new thumbnail" style="height: 140px; width:140px">
                                        <img id="previmage" src="{{ asset('/assets/front-end/img/blank.png') }}" width="140">
                                    </div>
                                </center>
                                <label for="profile_photo" class="control-label">Member Image*</label>
                                <input type="file"  class="form-control" id="previmage" name="image" onchange="readURL(this);">
                           
                       
                    </div>
                </div>
              
                <div class="form-group row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-alt-primary">save</button>
                        <a class="btn btn-secondary"  href="{{ route('members.home',[0]) }}">Close</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   

@endsection
@section('script')
    
<script type="text/javascript">
    window.onload = function() {
        var eSelect = document.getElementById('selector');
        var optOtherReason = document.getElementById('member');
        var optionDonor = document.getElementById('donor');

        eSelect.onchange = function() {
            if(eSelect.selectedIndex === 2) {
                optOtherReason.style.display = 'block';
                optionDonor.style.display = 'none';
            }
            else if(eSelect.selectedIndex == 3){
                optionDonor.style.display = 'block';
                optOtherReason.style.display = 'none';
            } else {
                optOtherReason.style.display = 'none';
                optionDonor.style.display = 'none';
            }
        }
    }
  </script>
    <Script>





        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#previmage')
                        .attr('src', e.target.result)
                        .width(140)
                        .height(140);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
       
    </Script>
@endsection