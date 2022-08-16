@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 background">
            <h4>Complaint Details</h4>
            <div class="row">
                <div class="col-md-6">
                    <p>Complaint No</p>
                    <p>Creation Date</p>
                    <p>Branch</p>
                    <p>Area</p>
                    <p>Region</p>
                    <p>Division</p>
                    <p>Mobail</p>
                    <p>Email</p>
                    <p>Assigned Eng.</p>
                    <p>Eng. Mobail</p>
                    <p>Complaint By</p>
                    <p>Priority</p>
                </div>
                <div class="col-md-6">
                    <p>74922</p>
                    <p>11-08-2020</p>
                    <p>506- Kaligonj</p>
                    <p>Jhenaidah</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 background">
            <h4>Feedback History</h4>
            <!-- activity table area -->
            <div class="pre-scrollable" style="overflow-x: hidden;">
                <center>
                    <h3>Activity Window</h3>
                </center>
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class='clickable-row' data-href='/complain-details'>
                            <td>10/08/22</td>
                            <td>321654</td>
                            <td>8894 - Dugia Bazar - Microfinance</td>
                        </tr>
                        <tr class='clickable-row' data-href='/complain-details'>
                            <td>10/08/22</td>
                            <td>321654</td>
                            <td>8894 - Dugia Bazar - Microfinance</td>
                        </tr>
                        <tr class='clickable-row' data-href='/complain-details'>
                            <td>10/08/22</td>
                            <td>321654</td>
                            <td>8894 - Dugia Bazar - Microfinance</td>
                        </tr>
                        <tr class='clickable-row' data-href='/complain-details'>
                            <td>10/08/22</td>
                            <td>321654</td>
                            <td>8894 - Dugia Bazar - Microfinance</td>
                        </tr>
                        <tr class='clickable-row' data-href='/complain-details'>
                            <td>10/08/22</td>
                            <td>321654</td>
                            <td>8894 - Dugia Bazar - Microfinance</td>
                        </tr>
                        <tr class='clickable-row' data-href='/complain-details'>
                            <td>10/08/22</td>
                            <td>321654</td>
                            <td>8894 - Dugia Bazar - Microfinance</td>
                        </tr>
                        <tr class='clickable-row' data-href='/complain-details'>
                            <td>10/08/22</td>
                            <td>321654</td>
                            <td>8894 - Dugia Bazar - Microfinance</td>
                        </tr>
                        <tr class='clickable-row' data-href='/complain-details'>
                            <td>10/08/22</td>
                            <td>321654</td>
                            <td>8894 - Dugia Bazar - Microfinance</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- feedback/forward/close complain area -->
            <div>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active btn-info" data-toggle="tab" href="#feedback">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-warning" data-toggle="tab" href="#forward">Forward</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-danger" data-toggle="tab" href="#close_complain">Close Complaint</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="feedback">
                        <p>Your Comment/Feedback</p>
                        <textarea name="" id="" cols="30" rows="4" width="100%"></textarea>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                    <div class="tab-pane" id="forward">
                        <p>Your Comment</p>
                        <textarea name="" id="" cols="30" rows="4"></textarea>
                        <button class="btn btn-primary float-right">Add Multiple Recipient</button>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-3">
                                <p style="margin-top:10px;">Set Priority</p>
                                <p style="margin-top:27px;">Set Type</p>
                                <p style="margin-top:27px;">Set Name</p>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </p>
                                <p>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </p>
                                <p>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-6">
                                <label for="inputEmail4">Complaint on</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4">Module Name</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-6">
                                <label for="inputEmail4">Complaint Title</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4">Module Subtitle</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary" style="margin-top:10px;">Send</button>
                    </div>
                    <div class="tab-pane" id="close_complain">
                        <p>Your Comment</p>
                        <textarea name="" id="" cols="30" rows="4"></textarea>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-6">
                                <label for="inputEmail4">Complaint on</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4">Module Name</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-6">
                                <label for="inputEmail4">Complaint Title</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4">Module Subtitle</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary" style="margin-top:10px;">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection