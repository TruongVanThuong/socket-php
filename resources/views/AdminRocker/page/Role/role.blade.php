@extends('AdminRocker.share.master')
@section('noi_dung')
<main id="app" v-cloak>


      <div class="col-md-12 mb-3 mt-3">
        <div class="modal-category">
          <!-- Button trigger modal -->
          <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">
            Thêm Role
          </button>

          <!-- Modal them Role-->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="text-lg font-semibold text-gray-600 dark:text-gray-300" id="exampleModalLabel">Thêm Danh Mục
                  </h3>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <label class="block text-sm">
                    <label>Tên Danh Mục</label>
                    <input v-model="add_role.ten_phan_quyen" type="text" class="form-control"
                      placeholder="Nhập Vào Tên Danh Mục">
                    <div v-if="errors.ten_phan_quyen" class="alert alert-warning">
                      @{{ errors.ten_phan_quyen[0] }}
                    </div>
                  </label>
                  <label class="block text-sm">
                    <label>role_phan_quyen</label>
                    <input v-model="add_role.role_phan_quyen" type="text" class="form-control"
                      placeholder="Nhập Vào role_phan_quyen">
                    <div v-if="errors.role_phan_quyen" class="alert alert-warning">
                      @{{ errors.role_phan_quyen[0] }}
                    </div>
                  </label>
                </div>

                <div class="modal-footer mt-3">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button v-on:click="them_role()" type="button" class="btn btn-primary">
                    Thêm Role
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center">
            <h3 class=" text-lg font-semibold text-gray-600 dark:text-gray-300"> Danh Sách Các Role</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="table_id" class="table table-bordered">
                <thead clas="bg-primary">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Role</th>
                    <th class="text-center">Role id</th>
                    <th class="text-center">Thao tác</th>
                  </tr>
                </thead>
                <tbody>

                  <tr v-for="(value, key) in data_Role">
                    <!-- <div v-if="value.is_delete !== 0"> -->

                    <td class="align-middle text-center">
                      @{{ key + 1 }}
                    </td>
                    <td class="align-middle text-center text-sm">
                      @{{ value ? value.ten_phan_quyen : 'Không có tên danh mục' }}
                    </td>
                    <td class="align-middle text-center text-sm">
                      @{{ value ? value.role_phan_quyen : 'Không có tên danh mục' }}
                    </td>
                    <td class="align-middle text-center text-xs">
                      <button v-on:click="cap_nhat(value)" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#ModalEdit">Edit</button>
                      <button v-on:click="xoa_role = value" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#DeleteModal">Xóa</button>
                    </td>

                    <!-- Modal cap nhat-->
                    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="text-lg font-semibold text-gray-600 dark:text-gray-300" id="exampleModalLabel">Cập
                            Nhật Role</h3>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body">
                          <label class="block text-sm">
                            <label>Role</label>
                            <input v-model="edit_role.ten_phan_quyen" type="text" class="form-control"
                              placeholder="Nhập Vào Tên Role">
                            <div v-if="errors.ten_phan_quyen" class="alert alert-warning">
                              @{{ errors.ten_phan_quyen[0] }}
                            </div>
                          </label>
                          <label class="block text-sm">
                            <label>Role id</label>
                            <input v-model="edit_role.role_phan_quyen" type="text" class="form-control"
                              placeholder="Nhập Vào Role id">
                            <div v-if="errors.role_phan_quyen" class="alert alert-warning">
                              @{{ errors.role_phan_quyen[0] }}
                            </div>
                          </label>
                        </div>

                        <div class="modal-footer mt-3">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button v-on:click="cap_nhat_role()" type="button" class="btn btn-primary">
                            Cập Nhật Danh Mục
                          </button>
                        </div>
                      </div>
                    </div>
                    </div>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      
      <!-- MODAL DELETE -->
      <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Xác Nhận Xoá Dữ Liệu</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Bạn có chắc muốn xoá dữ liệu này không?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
              <button type="button" class="btn btn-danger" v-on:click="kich_hoat_xoa_role()"
                data-bs-dismiss="modal">Xoá</button>
            </div>
          </div>
        </div>
      </div>
    
</main>
@endsection
@section('js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#table_id').DataTable();
      $('#table_thungrac').DataTable();
    });
  </script>


<script>
  new Vue({
    el: '#app',
    data: {
      data_Role: [],
      xoa_role: {},
      add_role: {},
      edit_role: {},
      errors: {},
    },
    created() {
      this.GetData();
    },

    methods: {
      // hien thi danh sach danh muc
      GetData() {
        axios
          .get('/admin/role/du-lieu')
          .then((res) => {
            this.data_Role = res.data.data_Role;
          });
      },
      cap_nhat(value) {
        this.edit_role = value; // Tạo một bản sao của user để tránh ảnh hưởng trực tiếp đến dữ liệu người dùng
      },
      kich_hoat_xoa_role() {
        axios
          .post('/admin/role/xoa', this.xoa_role)
          .then((res) => {
            if (res.data.status) {
              const message = "Dữ liệu đã được xoá thành công!";
              toastr.success(message);
              this.GetData();
            } else {
              toastr.error('Có lỗi không mong muốn!');
            }
          })
      },

      them_role() {
        axios
          .post('/admin/role/them', this.add_role)
          .then((res) => {
            console.log(res.data); // In ra response từ server để xem có lỗi gì không

            if (res.data.status) {
              toastr.success(res.data.message);
              this.GetData();
              // Tắt modal xác nhận
              $('#exampleModal').modal('hide');
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
      },

      cap_nhat_role() {
        axios
          .post('/admin/role/cap-nhat', this.edit_role)
          .then((res) => {
            console.log(res.data); // In ra response từ server để xem có lỗi gì không

            if (res.data.status) {
              toastr.success(res.data.message);
              this.GetData();
              // Tắt modal xác nhận
              $('#ModalEdit').modal('hide');
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
      },

      kich_hoat_xoa_cung() {
        axios
          .post('/admin/danhmuc/xoa-cung', this.xoa_cung)
          .then((res) => {
            if (res.data.status) {
              toastr.success(res.data.message);
              this.GetData();
            } else {
              toastr.error('Có lỗi không mong muốn!');
            }
          })
      },

      kich_hoat_phuc_hoi() {
        axios
          .post('/admin/danhmuc/phuc-hoi', this.phuc_hoi)
          .then((res) => {
            if (res.data.status) {
              toastr.success(res.data.message);
              this.GetData();
            } else {
              toastr.error('Có lỗi không mong muốn!');
            }
          })
      },

      kich_hoat_phuc_hoi_tat_ca() {
        axios
          .post('/admin/danhmuc/phuc-hoi-all')
          .then((res) => {
            if (res.data.status) {
              toastr.success(res.data.message);
              this.GetData();
            } else {
              toastr.error('Có lỗi không mong muốn!');
            }
          })
      }

    },

  });
</script>
@endsection