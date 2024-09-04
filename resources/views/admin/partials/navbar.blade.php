<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="message-square"></i>
                        <span class="indicator" id="new-message-count"></span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                    <div class="dropdown-menu-header">
                        <div class="position-relative">
                            <div class="dropdown-menu-header text-center">
                                <span id="new-messages"></span> Messages
                            </div>

                        </div>
                    </div>
                    <div class="list-group" id="inbox-list">

                    </div>
                    <div class="dropdown-menu-footer">
                        <a href="{{ route('contact.index') }}" class="text-muted">Show all messages</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    {{-- <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                    --}}
                    <span class="text-dark">{{ auth()->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">

                    <a class="dropdown-item" href="/logout">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
@section('scripts')
<script>
    $(document).ready(function() {
            function updateNotify() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('message.count') }}",
                    success: function(data) {

                        if (data.count > 0) {
                            $('#new-message-count').text(data.count)
                        } else {
                            $('#new-message-count').hide()
                        }
                    }
                })
            }
            setInterval(updateNotify, 3000)

            // new message
            function updateMessage() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('message.count') }}",
                    success: function(data) {
                        console.log(data);

                        if (data.count > 0) {
                            $('#new-messages').text(data.count)
                        } else {
                            $('#new-messages').hide()
                        }
                    }
                })
            }
            updateMessage(updateNotify, 7000)

            // Daftar Pesan

            function inbox() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('message.count') }}",
                    success: function(response) {
                        var html = '';
                        // console.log(response.get);
                        if (response.get.length > 0) {
                            response.get.forEach(function(
                                item) {
                                html += `
                        <a href="{{ url('admin/message/${item.id}') }}" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-10 ps-2">
                                    <div class="text-dark">${item.nama}</div>
                                    <div class="text-muted small mt-1">${item.email}</div>
                                    <div class="text-muted small mt-1">15m ago</div>
                                </div>
                            </div>
                        </a>
                    `;
                            });
                        } else {
                            html =
                                '<div class="dropdown-menu-header text-center">No new messages</div>';
                        }

                        $('#inbox-list').html(html);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            inbox();
            setInterval(inbox, 3000);

        })
</script>
@endsection