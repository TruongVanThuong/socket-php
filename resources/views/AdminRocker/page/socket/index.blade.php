@extends('AdminRocker.share.master')
@section('title', 'SOCKET')
@section('noi_dung')
<div class="row" id="app" v-cloak>
    <div class="page-content">
        <div class="row">
            <label for="urlInput" class="form-label">Nhập URL:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" v-model="socket.data" placeholder="https://example.com">
            </div>
            <div class="col-md-3">
                <button v-on:click="submit()" type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <div class="mt-3">
            <table class="table table-bordered">
                <thead class="bg-primary">
                    <tr>
                        <th class="text-center" style="width: 20px;">STT</th>
                        <th class="text-center">URL</th>
                        <th class="text-center">Row 1</th>
                        <th class="text-center">Row 2</th>
                        <th class="text-center">Row 3</th>
                        <th class="text-center">Row 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>@{{ socket.response.stt }}</td>
                        <td>@{{ socket.response.url }}</td>
                        <td>@{{ socket.response.row1 }}</td>
                        <td>@{{ socket.response.row2 }}</td>
                        <td>@{{ socket.response.row3 }}</td>
                        <td>@{{ socket.response.row4 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    new Vue({
        el: '#app',
        data: {
            socket: {
                data: '',
                response: {}
            },
            errors: {},
        },

        methods: {
            submit() {
                axios
                    .post('/admin/socket/check', this.socket)
                    .then((res) => {
                        console.log(res.data); // In ra response từ server để xem có lỗi gì không

                        if (res.data.status) {
                            toastr.success(res.data.message);
                            this.socket.response = res.data.data;
                        } else {
                            toastr.error('Có lỗi không mong muốn! 1');
                        }
                    })
                    .catch((error) => {
                        if (error && error.response.data && error.response.data.errors) {
                            this.errors = error.response.data.errors;
                        } else {
                            toastr.error('Có lỗi không mong muốn! 2');
                        }
                    })
            }
        },

    });

</script>
@endsection
