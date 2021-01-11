@include('clientUser.header')

<main id="main">
    <section id="client-profile-section">
        <div class="row justify-content-center">
            <div class="col col-xl-5 mt-3">
                <div id="client-profile-box">
                    <div class="bg-primary text-light pt-3 pb-2 pl-2">
                        <div class="row justify-content-between">
                            <div class="col-4">
                                <h5 class="text-left">
                                    Welcome,<br />
                                    {{$user->full_name}}
                                </h5>
                            </div>
                            <div class="col-4 text-right">
                                <button class="btn btn-warning mr-1">
                                    <a href="{{route('profile.edit.index')}}">Edit</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="text-center mt-3 mb-2">
                            <img src="{{ asset('img/team/team-3.jpg') }}" alt="No Image.." id="manager-profile-pic" /><br /><br />
                            <input type="file" class="btn btn-info btn-sm" value="Choose Profile Pic" />
                            <input type="submit" class="btn btn-success btn-sm" value="Upload Profile Pic" /><br /><br />
                        </div>
                    </form>
                    <table id="appointmentsTable" class="table table-striped table-bordered" style="width: 100%">
                        <tbody>
                            <tr>
                                <td>Name :</td>
                                <td>{{$user->full_name}}</td>
                            </tr>
                            <tr>
                                <td>Username :</td>
                                <td>{{$user->username}}</td>
                            </tr>
                            <tr>
                                <td>Email :</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Phone :</td>
                                <td>{{$user->contact_no}}</td>
                            </tr>
                            <tr>
                                <td>Gender :</td>
                                <td>{{$user->gender}}</td>
                            </tr>
                            <tr>
                                <td>Date of Birth :</td>
                                <td>
                                    {{$user->dob}}

                                </td>
                            </tr>
                            <tr>
                                <td>Address :</td>
                                <td>{{$user->address}}</td>
                            </tr>
                            <tr>
                                <td>Country :</td>
                                <td>{{$user->country}}</td>
                            </tr>
                            <tr>
                                <td>Status :</td>
                                <td>{{$user->status}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

@include('clientUser.footer')