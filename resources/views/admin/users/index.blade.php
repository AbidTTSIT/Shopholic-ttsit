@extends('layouts.admin_layouts.admin_layout')
@section('head-tag')
    <title>Shopholic|| Dashboard</title>
@endsection
@section('content')

<div class="content">
   <div class="page-header">
      <div class="page-title">
         <h4>Users List</h4>
         <h6>Manage your Users</h6>
      </div>
      <div class="page-btn">
         <a href="#" class="btn btn-added"><img src="{{asset('assets/img/icons/plus.svg')}}" class="me-2" alt="img">Add Users</a>
      </div>
   </div>
   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session()->get('message') }}
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
@endif

   <div class="card">
      <div class="card-body">
         <div class="table-top">
            <div class="search-set">
               <div class="search-path">
                  <a class="btn btn-filter" id="filter_search">
                     <img src="{{asset('assets/img/icons/filter.svg')}}" alt="img">
                     <span><img src="{{asset('assets/img/icons/closes.svg')}}" alt="img"></span>
                  </a>
               </div>
               <div class="search-input">
                  <a class="btn btn-searchset"><img src="{{asset('assets/img/icons/search-white.svg')}}" alt="img"></a>
               </div>
            </div>
            <div class="wordset">
               <ul>
                  <li>
                     <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{asset('assets/img/icons/pdf.svg')}}" alt="img"></a>
                  </li>
                  <li>
                     <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{asset('assets/img/icons/excel.svg')}}" alt="img"></a>
                  </li>
                  <li>
                     <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{asset('assets/img/icons/printer.svg')}}" alt="img"></a>
                  </li>
               </ul>
            </div>
         </div>
       
         <div class="table-responsive">
            <table class="table datanew">
               <thead>
                   <tr>
                                        <th>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <!--<th>Profile</th>-->
                                        <th>User Name </th>
                                        <!--<th>Last name </th>-->
                                        <!--<th>User name </th>-->
                                        <th>Phone</th>
                                        <th>email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
               </thead>
               <tbody>
                    @foreach ($users as $user)
                   <tr>
                       <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <!--<td class="productimgname">-->
                                        <!--    <a href="javascript:void(0);" class="product-img">-->
                                        <!--        <img src="assets/img/customer/customer1.jpg" alt="product">-->
                                        <!--    </a>-->
                                        <!--</td>-->
                                        <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                                        <!--<td>Thomas </td>-->
                                        <td>{{ $user->mobile_no ?? 'N/A'}} </td>
                                        <td>{{ $user->email }}</td>
                                        <!--<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"-->
                                        <!--        data-cfemail="42362a2d2f233102273a232f322e276c212d2f">[email&#160;protected]</a>-->
                                        <!--</td>-->
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user1" class="check">
                                                <label for="user1" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="edituser.html">
                                                <img src="{{asset("assets/img/icons/edit.svg")}}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="{{asset("assets/img/icons/delete.svg")}}" alt="img">
                                            </a>
                                        </td>
                                        
                                    </tr>
                                      @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
