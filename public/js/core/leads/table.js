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
        title: 'Agent',
        render: function (data, type, row, meta) {
            return row.causer.name+' : '+row.causer.email;
        }
    },
    {
        title: "Card",
        render: function (data, type, row, meta) {

            results_object.push(row.properties);
    
        var html_to_add = '<div class="card ecommerce-card">' +
                '<div class="item-img text-center">' +
                '<a href="#">' +
                '<img class="img-fluid card-img-top" style="width:100%;height:250px;" src="' + asset + '/' + row.properties.image + '" alt="" /></a>' +
                '</div>' +
                '<div class="card-body">' +
                '<div class="item-wrapper">' +
                '<div class="item-rating">' +
                '<ul class="unstyled-list list-inline">';
            html_to_add += '</ul>' +
                '</div>' +
                '<div>' +
                '<h6 class="card-text item-company"">' +
                '<strong style="color:red">Customer : </strong>' + row.properties.user_name +' - '+'<a href="" href="mailto:'+row.properties.user_email+'" class="company-name">' + row.properties.user_email + '</a>'+
                '</h6>' +
                '</div>' +
                '</div>' +
                '<h5 class="item-name">' + '<strong style="color:red"> Company : </strong>'+
                '<a class="text-body" href="#">' + row.properties.name + '</a>' +
                '<span class="card-text item-company"> - <a href="" href="mailto:'+row.properties.email+'" class="company-name">' + row.properties.email + '</a></span>' +
                '</h5>' +
                '<p class="card-text item-description"><strong>' +
                row.properties.sub_policy_type +
                '</strong><br>';
            html_to_add += '</p>' +
                '</div>' +
                '<div class="item-options text-center">' +
                '<div class="item-wrapper">' +
                '<div class="item-cost">' +
                '<h6 class="item-price">  ' +
                'Annual:' + row.properties.annual + '$<br>' +
                'Semi-Annual:' + row.properties.semi_annual + '$<br>' +
                'Monthly:' + row.properties.monthly + '$<br>' +
                '</h6>' +
                '</div>' +
                '</div>' +
                '<a href="#" onclick="policy_view('+meta.row+')" target="_blank" class="btn btn-light btn-wishlist">' +
                '<span>View</span>' +
                '</a>' +
                '</div>' +
                '</div>';
            return html_to_add;
        },
        orderable: false,
        searchable: false,
    },
  
];

makeAdvDT("datatables-conf", columns)
