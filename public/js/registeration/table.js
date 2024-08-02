const columns = [{

    data: null,
    defaultContent: '',
},
{
    data: "id",
    title: 'Sr.No',
    render: (data, type, row, meta) => meta.row + 1
},
{
    
    title: 'image',
    render: (data, type, row, meta) => {
        var html_to_add = '<td>'+
    '<div class="img-hover-zoom--blur"><img class="img-hover-zoom--brightness" src="'+asset+'images/users/'+row.user_attributes.image+'" alt="'+row.name+'" style="width:100px;height:100px;border-radius:50px"></div></td>';
    return html_to_add;
    },
    orderable: false,
    searchable: false,
},
{
    title: 'Name',
    render: function (data, type, row, meta) {
        return row.name;
    }
},
{
    title: 'Email',
    render: function (data, type, row, meta) {
        return row.email;
    }
},
{
    title: 'User Type',
    render: function (data, type, row, meta) {
        return row.user_attributes.user_type;
    }
},
{
    title: 'Status',
    render: function (data, type, row, meta) {
        return row.user_attributes.status;
    }
},
{
    title: "Edit",
    render: function (data, type, row, meta) {
       
        results_object.push(row);
    var html_to_add = '<td><button type="button" class="btn btn-relief-warning "  onclick="Edit_User('+meta.row+')">Edit</button></td>';
    
        return html_to_add;
    },
    orderable: false,
    searchable: false,
},
{
    title: "Delete",
    render: function (data, type, row, meta) {

        var quote= "'";
    var html_to_add = '<td><button type="button" class="btn btn-relief-danger bx-flashing-hover"  onclick="delete_User('+quote+row.id+quote+')">delete</button></td>';
    
        return html_to_add;
    },
    orderable: false,
    searchable: false,
},

];

makeAdvDT("datatables-conf", columns)
