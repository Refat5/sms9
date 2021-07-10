@extends('layout.front-end.app')
@push('css')
 <style>
     .banner_area .banner_inner{
        min-height: 225px !important;
     }
     .banner_area{
        min-height: 274px;
     }
 </style>
@endpush
@section('content')
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-right">
                @if(Request::is('list/0'))
				<h1>Executive Committee</h1>
                @elseif(Request::is('list/1'))
                <h1>Honor Board</h1>
                @elseif(Request::is('list/2'))
                <h1>Members</h1>
                @elseif(Request::is('list/3'))
                <h1>Donor</h1>
                @endif
				<div class="page_link">
					<a href="/">Home</a>
                    @if(Request::is('list/0'))
                    <a href="javascript:void(0)">Executive Committee</a>
                    @elseif(Request::is('list/1'))
                    <a href="javascript:void(0)">Honor Board</a>
                    @elseif(Request::is('list/2')) 
                    <a href="javascript:void(0)">Members</a>
                    @elseif(Request::is('list/3'))
                    <a href="javascript:void(0)">Donor</a>
                    @endif
					
				</div>
			</div>
		</div>
	</div>
</section>


<section class="committee-profile-area  gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8 m-auto">
				<div class="main-title">
                @if(Request::is('list/0'))
                <h1 class="font-30">Name of Officers</h1>
                @elseif(Request::is('list/1'))
                <h1 class="font-30"> Honor Board </h1>
                @elseif(Request::is('list/2'))
                <h1 class="font-30">List of Members </h1>
               @else
               <h1 class="font-30">List of Donors </h1>

                @endif
					
				</div>
				<div class="student-profile-wrap">
					<div class="table-responsive">
						<table class="table table-bordered text-center">
							<thead>
								<tr>
                                    @if(Request::is('list/0')  || Request::is('list/2') )
                                    <th>Member ID</th>
                                    @endif
                                    
									
                                    @if(Request::is('list/3'))
                                        <th>Name & Address</th>
                                        <th>Photo</th>

                                        @elseif(Request::is('list/1'))
                                        <th>President</th>
                                        @else
                                        <th>Name</th>
                                    @endif
								
                                    @if(Request::is('list/0'))
                                    <th>Designation</th>
                                    @elseif(Request::is('list/1'))
                                    <th>Secretary</th>
                                    <th>Period</th>
                                    @elseif(Request::is('list/2'))

                                    @endif
								
								</tr>
							</thead>
							<tbody>
                                @php($i = 1)
                                @foreach ($members as $member )
                                <!-- Modal -->
<div class="modal fade" id="memberModal{{ $member->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Member Full Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="img-box text-center">
                <img src="{{ $member->image ? '/'.$member->image : '/assets/front-end/img/blank.png' }}" alt="user" class="img-fluid" width="250" >
            </div>
            <div class="modal-body-heading">
                Name
            </div>
            <div>
                <strong>Name : </strong> {{ $member->name }} <br>
                @if($member->type == 3)
                <div class="modal-body-heading">
                     Address
                </div>
                <div>
                    <address>
                        {{  $member->details? $member->details['presentAddress'] : 'null' }}
                    </address>
                </div>
                    
                @endif
                @if(Request::is('list/2'))
                <strong>Father Name : </strong> {{ $member->details['father'] }} <br>

                <strong>Mother Name : </strong> {{  $member->details['mother'] }} <br>

                <div class="modal-body-heading">
                    Permanent Address
                </div>
                <div>
                    <address>
                        {{  $member->details['permanentAddress'] }}
                    </address>
                </div>
                <div class="modal-body-heading">
                    Present Address
                </div>
                <div>
                    <address>
                        {{  $member->details['presentAddress'] }}
                    </address>
                </div>
                <div class="modal-body-heading">
                    Phone &E-mail
                </div>
                <div>
                    {{  $member->details['phone'] }}
                    <br>
      
                    {{  $member->details['email'] }}
                </div>
                @endif
                

            </div>
            <div class="modal-body-heading">
                Designation
            </div>
            <div>{{ $member->designation }}</div>
        </div>
      </div>
    </div>
  </div>
                                <tr>
                                    @if($member->type != 3 & $member->type != 1)
                                    <td>{{ $member->member_id ? $member->member_id : 'Null' }}</td>

                                    @endif
                                    @if($member->type == 3)
                                    <td>
                                        {{   $member->name }} <br>

                                        {{  $member->details? $member->details['presentAddress'] : 'null' }}

                                    </td>
                                    <td>
                                        <img src="\{{$member->image}}" alt="user" width="100" height="90" style="border-radius: 50%;">

                                    </td>
                                    @endif
                                    @if($member->type != 3)
									<td>
										<span data-toggle="modal" data-target="#memberModal{{ $member->id }}" class="member-view-details">{{ $member->name }}</span>
									</td>
                                    @endif
								
                                        @if($member->type == 0 || $member->type == 1 )
                                        <td>
										{{ $member->designation }}
                                         </td>
                                       
                                       
                                        @endif
                                        @if($member->type == 1)
                                        <td>
                                            {{ $member->details ? $member->details['period'] : 'null' }}
                                        </td>
                                        @endif
									
								</tr>
                                @endforeach
							
							
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection