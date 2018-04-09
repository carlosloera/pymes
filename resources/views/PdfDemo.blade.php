@extends('layouts.app')


@section('content')

    <div class="container">
        <h3 class="center-text">generate</h3>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <br><br><br><br>

                <table cellspacing="3" width="100%">
                    <tr>
                        <td>
                            <div class="form-group">
                                <a href="{{ route('samplePdf') }}" class="btn btn-primary">Generate</a>
                            </div>

                            
                        </td>
                        <td width="25%">
                                <div class="form-group">
                                    <a href="{{ route('htmlToPdf')}}" class="btn btn-primary">html to Pdf</a>
                                </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection