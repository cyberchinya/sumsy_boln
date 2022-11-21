<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Спасибо доктор</h2>
            <p>Отправляя свои персональные данные из данной формы, я даю согласие на <a href="http://www.consultant.ru/document/cons_doc_LAW_61801/6c94959bc017ac80140621762d2ac59f6006b08c/"
            target="_blank">обработку моих персональных данных согласно ч.4 ст.9 152 ФЗ.</a> </p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Ваша почта" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Ваш номер" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Ваше сообщение"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Отправить сообщение</button></div>
        </form>
    </div>
</section>
<!-- End Appointment Section -->
