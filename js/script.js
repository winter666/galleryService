$(document).ready(function () {

  $('#upload_image').on('submit', function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    formData.append('submit', 1);

    $.ajax({
      type: $(this).attr('method'), // Тип запроса
      url: '/handler/upload.php', // Скрипт обработчика
      data: formData, // Данные которые мы передаем
      cache:false, // В запросах POST отключено по умолчанию, но перестрахуемся
      contentType: false, // Тип кодирования данных мы задали в форме, это отключим
      processData: false, // Отключаем, так как передаем файл
      success: function(data) {
         $('#output').html(data);
      },
       error: function(data) {
         $('#output').html(data);
       }
    });
  });
});
