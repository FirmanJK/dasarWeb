$(document).ready(function() {
    $('#nilaiForm').on('submit', function(event) {
        event.preventDefault();

        var name = $('#name').val();
        var nilai1 = parseInt($('#nilai1').val());
        var nilai2 = parseInt($('#nilai2').val());
        var nilai3 = parseInt($('#nilai3').val());
        var average = (nilai1 + nilai2 + nilai3) / 3;


        var nameRegex = /^[a-zA-Z\s]+$/;
        if (!nameRegex.test(name)) {
            $('#result').text('Nama tidak boleh mengandung simbol atau angka').css('color','black');
            return;
        }

        var grade = '';

        if (average >= 87) {
            grade = 'A+';
           
        } else if (average >= 76) {
            grade = 'A';
            keterangan = 'Very Good';
        } else if (average >= 61) {
            grade = 'B';
           
        } else if (average >= 50) {
            grade = 'C';
          
        } else if (average >= 31) {
            grade = 'D';
          
        } else {
            grade = 'E';
            
        }

        $('#result').html(`
            <p style="color: black;">Nama : ${name.toUpperCase()}</p>
            <p style="color: black;">Rata-rata : ${average.toFixed(2)}</p>
            <p style="color: black;">Grade : ${grade}</p>
        `);
    });
});