@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body bg-primary text-white mailbox-widget pb-0">
                                <h2 class="text-white pb-3"><i class="bi bi-mailbox me-2"></i>Mailbox</h2>
                                <ul class="nav nav-tabs custom-tab border-bottom-0 mt-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="inbox-tab" data-toggle="tab" aria-controls="inbox"
                                            href="#inbox" role="tab" aria-selected="true">
                                            <span class="d-block d-md-none"><i class="ti-email"></i></span>
                                            <span class="d-none d-md-block"> INBOX</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab"
                                    role="tabpanel">
                                    <div>
                                        <div class="row p-4 no-gutters align-items-center">
                                            <div class="col-sm-12 col-md-6">
                                                <h3 class="font-light mb-0">{{ $inboxcount }}<i class="ti-email mr-2"></i>

                                                    Unread emails

                                                </h3>
                                            </div>
                                            <div class="col-sm-12 col-md-6">

                                            </div>
                                        </div>
                                        <!-- Mail list-->
                                        <div class="table-responsive">
                                            <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                                <tbody>
                                                    <!-- row -->
                                                    <?php
                                                    $no = 0;
                                                    ?>
                                                    @foreach ($inbox as $item)
                                                        <?php
                                                        $no++;
                                                        ?>
                                                        <tr>
                                                            <!-- label -->

                                                            <!-- star -->
                                                            <td><i class="fa fa-star text-warning"></i></td>
                                                            <td>
                                                                <span class="mb-0 text-muted">{{ $item->name }}</span>
                                                            </td>
                                                            <!-- Message -->
                                                            <!-- Attachment -->

                                                            <!-- Time -->
                                                            <td>
                                                                <a class="link" href="javascript: void(0)">

                                                                    <a style="text-decoration: none;" class="text-primary"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModal<?= $no ?>">detail</a>
                                                                </a>
                                                            </td>
                                                            <td class="text-muted"><i
                                                                    class="fa fa-paperclip text-muted me-3"></i>{{ $item->created_at->format('M d') }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <!-- row -->
                                                    <!-- Modal -->

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sent" aria-labelledby="sent-tab" role="tabpanel">
                                    <div class="row p-3 text-dark">
                                        <div class="col-md-6">
                                            <h3 class="font-light">Lets check profile</h3>
                                            <h4 class="font-light">you can use it with the small code</h4>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                                justo, rhoncus ut, imperdiet a.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="spam" aria-labelledby="spam-tab" role="tabpanel">
                                    <div class="row p-3 text-dark">
                                        <div class="col-md-6">
                                            <h3 class="font-light">Come on you have a lot message</h3>
                                            <h4 class="font-light">you can use it with the small code</h4>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                                justo, rhoncus ut, imperdiet a.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="delete" aria-labelledby="delete-tab" role="tabpanel">
                                    <div class="row p-3 text-dark">
                                        <div class="col-md-6">
                                            <h3 class="font-light">Just do Settings</h3>
                                            <h4 class="font-light">you can use it with the small code</h4>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                                justo, rhoncus ut, imperdiet a.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    body {
        background: #edf1f5;
        margin-top: 20px;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: 0;
    }

    .mailbox-widget .custom-tab .nav-item .nav-link {
        border: 0;
        color: #fff;
        border-bottom: 3px solid transparent;
    }

    .mailbox-widget .custom-tab .nav-item .nav-link.active {
        background: 0 0;
        color: #fff;
        border-bottom: 3px solid #2cd07e;
    }

    .no-wrap td,
    .no-wrap th {
        white-space: nowrap;
    }

    .table td,
    .table th {
        padding: .9375rem .4rem;
        vertical-align: top;
        border-top: 1px solid rgba(120, 130, 140, .13);
    }

    .font-light {
        font-weight: 300;
    }
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<?php
$no = 0;
?>
@foreach ($inbox as $item)
    <?php
    $no++;
    ?>
    <div class="modal fade" id="exampleModal<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span>From :</span>
                    {{ $item->name }} <br>
                    <span>Email : </span>
                    {{ $item->email }}
                    <br><br>
                    <span>Message : </span><br>
                    {{ $item->message }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/delete_email/{{ $item->name }}"> <button type="button"
                            class="btn btn-danger">Delete</button></a>
                </div>
            </div>
        </div>
    </div>
@endforeach
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
