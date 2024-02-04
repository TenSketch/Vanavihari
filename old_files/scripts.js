document.addEventListener('DOMContentLoaded', function() {
    const resortSelect = document.getElementById('resort');
    const dateRangeInput = $('#date-range');
    const guestsRoomsInput = document.getElementById('guests-rooms');
    const searchBtn = document.getElementById('search-btn');

    let guests = 1;
    let rooms = 1;

    resortSelect.addEventListener('change', function() {
        const selectedResort = resortSelect.value;
        // Adjust guests and rooms based on the selected resort
        if (selectedResort === 'Resort 3') {
            guests = 6;
        } else {
            guests = 4;
        }
        guestsRoomsInput.value = `${guests} guests, ${rooms} rooms`;
    });

    dateRangeInput.daterangepicker({
        opens: 'left',
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    }, function(start, end) {
        dateRangeInput.val(`${start.format('YYYY-MM-DD')} - ${end.format('YYYY-MM-DD')}`);
    });

    dateRangeInput.on('cancel.daterangepicker', function() {
        dateRangeInput.val('');
    });

    searchBtn.addEventListener('click', function() {
        const resort = resortSelect.value;
        const dateRange = dateRangeInput.val();
        // You can perform the search functionality here
        console.log('Resort:', resort);
        console.log('Date Range:', dateRange);
        console.log('Guests:', guests);
        console.log('Rooms:', rooms);
    });
});
