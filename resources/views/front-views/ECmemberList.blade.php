@extends('layout.front-end.app')
@section('content')
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-right">
				<h1>Ec Committee</h1>
				<div class="page_link">
					<a href="/">Home</a>
					<a href="javascript:void(0)">Ec Committee</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="committee-profile-area section_gap gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8 m-auto">
				<div class="main-title">
                @if(Request::is('list/0'))
                <h1 class="font-30">List Of Ec Committee</h1>
                @elseif(Request::is('list/1'))
                <h1 class="font-30">List Of Honor Board </h1>
                @elseif(Request::is('list/2'))
                <h1 class="font-30">List Of Members </h1>
               @else
               <h1 class="font-30">List Of Donor </h1>

                @endif
					
				</div>
				<div class="student-profile-wrap">
					<div class="table-responsive">
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th>Member Id</th>
                                    @if(Request::is('list/3'))
                                        <th>Profile</th>
                                    @endif
									<th>Name</th>
                                    @if(Request::is('list/0'))
                                    <th>Designation</th>
                                    @elseif(Request::is('list/1'))
                                    <th>Designation</th>
                                    @elseif(Request::is('list/2'))

                                    @endif
								
								</tr>
							</thead>
							<tbody>
                                
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
                <img src="{{ $member->image ? '/'.$member->image : 'assets/front-end/img/blank.png' }}" alt="user" class="img-fluid" width="250" >
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
									<td>{{ $member->id }}</td>
                                    @if($member->type == 3)
                                    <td>
                                        <img src="\{{$member->image}}" alt="user" width="100" height="90" style="border-radius: 50%;">

                                    </td>
                                    @endif
									<td>
										<span data-toggle="modal" data-target="#memberModal{{ $member->id }}" class="member-view-details">{{ $member->name }}</span>
									</td>
								
                                        @if(Request::is('list/0'))
                                        <td>
										{{ $member->designation }}
                                    </td>
                                        @elseif(Request::is('list/1'))
                                        <td>
                                            {{ $member->designation }}
                                        </td>
                                        @elseif(Request::is('list/2'))
                                   
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