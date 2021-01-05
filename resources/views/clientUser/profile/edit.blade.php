@include('clientUser.header')

<main id="main">
    <section id="client-profile-section">
        <form method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col col-xl-5 mt-3">
                    <div id="client-profile-box">
                        <div class="bg-primary text-light pt-3 pb-2 pl-2">
                            <div class="row justify-content-between">
                                <div class="col-4">
                                    <h5 class="text-left">
                                        Welcome, <br />
                                        {{$user->full_name}}
                                    </h5>
                                </div>
                                <div class="col-4 text-right">
                                    <a class="btn btn-warning mr-1 text-light" href="{{route('profile.index')}}">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3 mb-2">
                            <img src="{{ asset('img/team/team-3.jpg') }}" alt="No Image.." id="manager-profile-pic" />
                        </div>
                        <table id="appointmentsTable" class="table table-striped table-bordered" style="width: 100%">
                            <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td>
                                        <input class="form-control" type="text" name="full_name" value="{{$user->full_name}}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Username:</td>
                                    <td>
                                        <input class="form-control" type="text" name="username" value="{{$user->username}}" disabled />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>
                                        <input class="form-control" type="text" name="email" value="{{$user->email}}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td>
                                        <input class="form-control" type="text" name="contact_no" value="{{$user->contact_no}}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td>
                                        <input class="form-control" type="text" name="gender" value="{{$user->gender}}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth:</td>
                                    <td>
                                        <input class="form-control" type="date" name="dob" value="{{$user->dob}}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td>
                                        <input class="form-control" type="text" name="address" value="{{$user->address}}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Country:</td>
                                    <td>
                                        <input class="form-control" type="text" name="country" value="{{$user->country}}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status:</td>
                                    <td>
                                        <input class="form-control" type="text" name="status" value="{{$user->status}}" disabled />
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <b>ENTER THE PASSWORD TO SAVE CHANGES</b>
                        <table id="appointmentsTable" class="table table-striped table-bordered" style="width: 100%">
                            <tbody>
                                <tr>
                                    <td>Password:</td>
                                    <td>
                                        <input class="form-control" type="password" name="password" placeholder="**********" value="" required />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @if(Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                        <div align="right">
                            <input type="submit" class="btn btn-success mr-1" name="submit" value="Save Changes" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>

@include('clientUser.footer')