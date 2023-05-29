@extends('layouts.master')

@section('title', 'Message Center')


@section('custom-style')

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">

<style>

.dot {
  height: 20px;
  width: 20px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

.sortable tr {
    cursor: pointer;
}

</style>

@endsection

@section('content')

<div class="row">

    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card" style="border-radius:10px !important">
            {{-- Messages Table --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mt-2 mb-4 p-3">
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#messageModal">
                                Compose
                            </button>
                        </h4>


                        <div class="mt-5">
                            <table class="table sortable">
                                <tbody>

                                            <tr class="table-active row" onclick="window.location='1';">
                                            {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                                            <td class="col-2">Omer MEMES</td>
                                            <td class="col-8">Hello Omer</span> </td>
                                            </td>
                                        </tr>
                                        {{-- <tr>
                                            <td colspan="3" class="span4 text-center text-muted"> No Messages Found</td>
                                        </tr> --}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


<!-- Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form class="" action="" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Message/Enquiry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-5">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Recipient</label>
                        <select class="form-control" required name="recipient">
                                <option value="1"> Omer MEMES</option>
                                <option value="2"> Omer MEMES</option>
                                <option value="3"> Omer MEMES</option>
                        </select>

                        <small id="recipientHelp" class="form-text text-muted">Please direct your message/enquiry to the appropriate email.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Subject</label>
                        <input class="form-control" required name="subject" />
                    </div>

                    <div class="form-group">
                        <label for="">Message Body</label>
                        <textarea class="form-control" id="messageBody" rows="10" name="body" required></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-paper-plane"></i> Send</button>
                </div>

            </form>
        </div>
    </div>
</div>




@endsection

@section('custom-script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>

<script>

    // $('#messageBody').summernote({
    //     placeholder: 'Type your message...',
    //     tabsize: 2,
    //     height: 200
    // });

    $("#messageBody").summernote({
        tabsize: 2,
        placeholder: 'Type your message...',
        height: 300,
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen' ] ]

            //[ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    });

</script>





@endsection
