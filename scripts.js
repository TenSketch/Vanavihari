$('#dateRange').daterangepicker({
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
        format: 'DD/MM/YY hh:mm A'
    }
});
$('#confirmGuestsRooms').click(function () {
    var guests = $('#guests').val();
    var rooms = $('#rooms').val();
    $('#guestsGuests').val(guests);
    $('#guestsRooms').val(rooms);
    $('.guests-rooms-label').html(guests + ' guests, ' + rooms + ' rooms');
    $('#guestsRoomsDropdown').dropdown('toggle');
});
