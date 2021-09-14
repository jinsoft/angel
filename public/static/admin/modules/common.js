layui.define(function (e) {
    var i = (layui.$, layui.layer, layui.laytpl, layui.setter, layui.view, layui.admin);
    i.events.logout = function () {
        const $ = layui.$;
        i.req({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            url: "/admin/logout", type: "post", data: {}, done: function (e) {
                i.exit(function () {
                    location.href = "admin"
                })
            }
        })
    }, e("common", {})
});
