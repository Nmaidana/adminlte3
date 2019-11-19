@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <a href="mailbox.html" class="btn btn-primary btn-block mb-3">Back to Inbox</a>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Folders</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="mailbox.html" class="nav-link">
                                <i class="fa fa-inbox"></i> Inbox
                                <span class="badge bg-primary float-right">12</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-envelope-o"></i> Sent
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-file-text-o"></i> Drafts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-filter"></i> Junk
                                <span class="badge bg-warning float-right">65</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-trash-o"></i> Trash
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Labels</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-circle-o text-danger"></i> Important</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-circle-o text-warning"></i> Promotions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-circle-o text-primary"></i> Social</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Read Mail</h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i
                                class="fa fa-chevron-left"></i></a>
                        <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i
                                class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="mailbox-read-info">
                        <h5>Message Subject Is Placed Here</h5>
                        <h6>From: support@adminlte.io
                            <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span></h6>
                    </div>
                    <div class="mailbox-controls with-border text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip"
                                data-container="body" title="Delete">
                                <i class="fa fa-trash-o"></i></button>
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip"
                                data-container="body" title="Reply">
                                <i class="fa fa-reply"></i></button>
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip"
                                data-container="body" title="Forward">
                                <i class="fa fa-share"></i></button>
                        </div>
                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                            <i class="fa fa-print"></i></button>
                    </div>
                    <div class="mailbox-read-message">
                        <p>Hello John,</p>

                        <p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put
                            a bird
                            on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk.
                            Ethical
                            master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny
                            pack
                            gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3
                            wolf moon
                            asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas
                            church-key tofu
                            blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal
                            American
                            Apparel.</p>

                        <p>Raw denim McSweeney's bicycle rights, iPhone trust fund quinoa Neutra VHS kale chips vegan
                            PBR&amp;B
                            literally Thundercats +1. Forage tilde four dollar toast, banjo health goth paleo butcher.
                            Four dollar
                            toast Brooklyn pour-over American Apparel sustainable, lumbersexual listicle gluten-free
                            health goth
                            umami hoodie. Synth Echo Park bicycle rights DIY farm-to-table, retro kogi sriracha
                            dreamcatcher PBR&amp;B
                            flannel hashtag irony Wes Anderson. Lumbersexual Williamsburg Helvetica next level.
                            Cold-pressed
                            slow-carb pop-up normcore Thundercats Portland, cardigan literally meditation lumbersexual
                            crucifix.
                            Wayfarers raw denim paleo Bushwick, keytar Helvetica scenester keffiyeh 8-bit irony
                            mumblecore
                            whatever viral Truffaut.</p>

                        <p>Post-ironic shabby chic VHS, Marfa keytar flannel lomo try-hard keffiyeh cray. Actually fap
                            fanny
                            pack yr artisan trust fund. High Life dreamcatcher church-key gentrify. Tumblr stumptown
                            four dollar
                            toast vinyl, cold-pressed try-hard blog authentic keffiyeh Helvetica lo-fi tilde
                            Intelligentsia. Lomo
                            locavore salvia bespoke, twee fixie paleo cliche brunch Schlitz blog McSweeney's messenger
                            bag swag
                            slow-carb. Odd Future photo booth pork belly, you probably haven't heard of them actually
                            tofu ennui
                            keffiyeh lo-fi Truffaut health goth. Narwhal sustainable retro disrupt.</p>

                        <p>Skateboard artisan letterpress before they sold out High Life messenger bag. Bitters chambray
                            leggings listicle, drinking vinegar chillwave synth. Fanny pack hoodie American Apparel
                            twee. American
                            Apparel PBR listicle, salvia aesthetic occupy sustainable Neutra kogi. Organic synth Tumblr
                            viral
                            plaid, shabby chic single-origin coffee Etsy 3 wolf moon slow-carb Schlitz roof party
                            tousled squid
                            vinyl. Readymade next level literally trust fund. Distillery master cleanse migas, Vice
                            sriracha
                            flannel chambray chia cronut.</p>

                        <p>Thanks,<br>Jane</p>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <ul class="mailbox-attachments clearfix">
                        <li>
                            <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>
                                    Sep2014-report.pdf</a>
                                <span class="mailbox-attachment-size">
                                    1,245 KB
                                    <a href="#" class="btn btn-default btn-sm float-right"><i
                                            class="fa fa-cloud-download"></i></a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>
                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> App
                                    Description.docx</a>
                                <span class="mailbox-attachment-size">
                                    1,245 KB
                                    <a href="#" class="btn btn-default btn-sm float-right"><i
                                            class="fa fa-cloud-download"></i></a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo1.png"
                                    alt="Attachment"></span>
                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo1.png</a>
                                <span class="mailbox-attachment-size">
                                    2.67 MB
                                    <a href="#" class="btn btn-default btn-sm float-right"><i
                                            class="fa fa-cloud-download"></i></a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo2.png"
                                    alt="Attachment"></span>
                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                                <span class="mailbox-attachment-size">
                                    1.9 MB
                                    <a href="#" class="btn btn-default btn-sm float-right"><i
                                            class="fa fa-cloud-download"></i></a>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                        <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
                    </div>
                    <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                    <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('wolfsyncro/adminlte3/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/iCheck/flat/blue.css') }}">
@endsection
