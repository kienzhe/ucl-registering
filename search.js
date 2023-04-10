function searchbar(id){
    let input = $(id+'_search').val().toLowerCase();
    $(id + " div").filter(function () {
        // console.log(this);
        $(this).toggle($(this).text().toLowerCase().indexOf(input) > -1)
    });

}