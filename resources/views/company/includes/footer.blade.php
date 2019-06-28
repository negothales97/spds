<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Versão</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <b>SPDS</b>.</strong> Todos os direitos reservados.
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.pt-BR.min.js">
</script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>

<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.js?ver=1.1')}}"></script>

<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

<script type="text/javascript">
/**
 * Converte número do formato brasileiro para tipo float
 *
 * @returns amount
 */
function realToFloat(amount) {
    amount = amount.replace(/\./g, "");
    amount = amount.replace(",", ".");
    amount = parseFloat(amount);
    return amount;
}
/**
 * Converte número do formato float para o formato brasileiro
 */
function floatToReal(n, c, d, t) {
    c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "," : d, t = t == undefined ? "." : t, s = n < 0 ? "-" :
        "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n -
        i).toFixed(c).slice(2) : "");
}
$('.text_know').hide();
$('.country_id').change(function() {
    var country_id = $(this).val();
    validateCountryScript(country_id);
});
$('.state_id').change(function() {
    var state_id = $(this).val();
    getCitiesScript(state_id);
});

$('.knowledge_id').change(function() {
    var knowledge_id = $(this).val();
    getSubknowledgeScript(knowledge_id);
});

$('.situation').change(function(){
  var situation = $(this).val();
  getSituation(situation);
});
$('.actually').change(function(){
  var actually = $(this).val();
  isActually(actually);
});

function validateCountryScript(country_id){
    if (country_id == 1) {
        getStatesScript();
    } else {
        $('.state_formation').slideUp();
        $('.state_professional').slideUp();
        $('.city_professional').slideUp();
        $('.state_id').html('');
    }
}

function getSituation(situation){
    if(situation == 'trancado'){
        $('.finish').hide();
    }else{
        $('.finish').show();
    }
}

function isActually(actually){
    if(actually == 0){
        $('.finish').show();
    }else{
        $('.finish').hide();
    }
}

$('.level_id').change(function() {
    var level_id = $(this).val();
    getCoursesScript(level_id);
});

function getStatesScript() {
    var states = <?php echo getStates() ?>;

    $('.state_formation').slideDown();
    $('.state_professional').slideDown();
    $('.city_professional').slideDown();
    $('.state_id').html('');
    $('.state_id').append('<option selected disabled>SELECIONE...</option>');
    for (var i = 0; i < states.length; ++i) {
        $('.state_id').append('<option value="' + states[i].id + '" >' + states[i].name +
            '</option>');
    }
}

function getCoursesScript(level_id) {
    $.ajax({
        type: 'POST',
        url: "{{route('get-courses')}}",
        data: {
            level_id: level_id,
        },
        beforeSend: function() {},
        success: function(data) {
            var courses = $.parseJSON(data);
            $('.course_id').html('');
            $('.course_id').append('<option selected disabled>SELECIONE...</option>');
            for (var i = 0; i < courses.length; ++i) {
                $('.course_id').append('<option value="' + courses[i].id + '" >' + courses[i].name +
                    '</option>');
            }
        }
    });
}

function getCitiesScript(state_id) {
    $.ajax({
        type: 'POST',
        url: "{{route('get-cities')}}",
        data: {
            state_id: state_id,
        },
        beforeSend: function() {},
        success: function(data) {
            var cities = $.parseJSON(data);
            $('.city_id').html('');
            $('.city_id').append('<option selected disabled>SELECIONE...</option>');
            for (var i = 0; i < cities.length; ++i) {
                $('.city_id').append('<option value="' + cities[i].id + '" >' + cities[i].name +
                    '</option>');
            }
        }
    });
}

function getSubknowledgeScript(knowledge_id) {
    $.ajax({
        type: 'POST',
        url: "{{route('get-subknowledges')}}",
        data: {
            knowledge_id: knowledge_id,
        },
        beforeSend: function() {},
        success: function(data) {
            var subknowledges = $.parseJSON(data);
            $('.subknowledge_id').html('');
            $('.subknowledge_id').append('<option selected disabled>SELECIONE...</option>');
            for (var i = 0; i < subknowledges.length; ++i) {
                $('.subknowledge_id').append('<option value="' + subknowledges[i].id + '" >' + subknowledges[i].name +
                    '</option>');
            }
        }
    });
}



/**
 * Modal de confirmação
 */
$('.act-delete').on('click', function(e) {
    e.preventDefault();
    $('#confirmationModal .modal-title').html('Confirmação');
    $('#confirmationModal .modal-body p').html('Tem certeza que deseja realizar esta ação?');
    var href = $(this).attr('href');
    $('#confirmationModal').modal('show').on('click', '#confirm', function() {
        window.location.href = href;
    });
});
$('.act-password').on('click', function(e) {
    e.preventDefault();
    var id = $(this).data('id');

    $('#passwordModal form input[name="id"]').val(id);   

    $('#passwordModal').modal('show');
});
$('.act-formation-edit').on('click', function(e) {
    e.preventDefault();
    var formation_id    = $(this).data('formation-id');
    var name            = $(this).data('formation-name');
    var country_id      = $(this).data('formation-country_id');
    var state_id        = $(this).data('formation-state_id');
    var level_id        = $(this).data('formation-level_id');
    var course_id       = $(this).data('formation-course_id');
    var situation       = $(this).data('formation-situation');
    var start_month     = $(this).data('formation-start_month');
    var start_year      = $(this).data('formation-start_year');
    var finish_month    = $(this).data('formation-finish_month');
    var finish_year     = $(this).data('formation-finish_year');

    $('#formationEditModal form input[name="formation_id"]').val(formation_id);
    $('#formationEditModal form input[name="name"]').val(name);
    $('#formationEditModal form select[name="country_id"]').val(country_id);
    $('#formationEditModal form select[name="state_id"]').val(state_id);
    $('#formationEditModal form select[name="level_id"]').val(level_id);
    $('#formationEditModal form select[name="course_id"]').val(course_id);
    $('#formationEditModal form select[name="situation"]').val(situation);
    $('#formationEditModal form select[name="start_month"]').val(start_month);
    $('#formationEditModal form select[name="start_year"]').val(start_year);
    $('#formationEditModal form select[name="finish_month"]').val(finish_month);
    $('#formationEditModal form select[name="finish_year"]').val(finish_year);
    getSituation(situation);

    $('#formationEditModal').modal('show');
});

$('.act-professional-edit').on('click', function(e) {
    e.preventDefault();
    var professional_id = $(this).data('professional-id');
    var name            = $(this).data('professional-name');
    var occupation      = $(this).data('professional-occupation');
    var hierarchy_id    = $(this).data('professional-hierarchy_id');
    var description     = $(this).data('professional-description');
    var country_id      = $(this).data('professional-country_id');
    var state_id        = $(this).data('professional-state_id');
    var city_id         = $(this).data('professional-city_id');
    var start_month     = $(this).data('professional-start_month');
    var start_year      = $(this).data('professional-start_year');
    var finish_month    = $(this).data('professional-finish_month');
    var finish_year     = $(this).data('professional-finish_year');

    $('#professionalEditModal form input[name="professional_id"]').val(professional_id);
    $('#professionalEditModal form input[name="name"]').val(name);
    $('#professionalEditModal form input[name="occupation"]').val(occupation);
    $('#professionalEditModal form select[name="hierarchy_id"]').val(hierarchy_id);
    $('#professionalEditModal form textarea[name="description"]').val(description);
    $('#professionalEditModal form select[name="country_id"]').val(country_id);
    $('#professionalEditModal form select[name="state_id"]').val(state_id);
    $('#professionalEditModal form select[name="city_id"]').val(city_id);
    $('#professionalEditModal form select[name="start_month"]').val(start_month);
    $('#professionalEditModal form select[name="start_year"]').val(start_year);
    $('#professionalEditModal form select[name="finish_month"]').val(finish_month);
    $('#professionalEditModal form select[name="finish_year"]').val(finish_year);
    if(finish_year == null || finish_year == ""){
        actually = 1;
    }else{
        actually = 0;
    }
    $('#professionalEditModal form select[name="actually"]').val(actually);
    isActually(actually);
    $('#professionalEditModal').modal('show');
});

$('.act-language-edit').on('click', function(e) {
    e.preventDefault();
    var lang_id     = $(this).data('language-id');
    var level       = $(this).data('language-level');
    var language_id = $(this).data('language-language_id');

    $('#languageEditModal form input[name="lang_id"]').val(lang_id);
    $('#languageEditModal form select[name="level"]').val(level);
    $('#languageEditModal form select[name="language_id"]').val(language_id);
    
    $('#languageEditModal').modal('show');
});

$('.act-knowledge-edit').on('click', function(e) {
    e.preventDefault();
    var know_id     = $(this).data('knowledge-id');
    var knowledge_id       = $(this).data('knowledge-knowledge_id');
    var subknowledge_id = $(this).data('knowledge-subknowledge_id');

    $('#knowledgeEditModal form input[name="know_id"]').val(know_id);
    $('#knowledgeEditModal form select[name="knowledge_id"]').val(knowledge_id);
    $('#knowledgeEditModal form select[name="subknowledge_id"]').val(subknowledge_id);
    
    $('#knowledgeEditModal').modal('show');
});
$('.act-formation').on('click', function(e) {
    e.preventDefault();
    var student_id = $(this).data('student_id');

    $('#formationModal form input[name="student_id"]').val(student_id);   

    $('#formationModal').modal('show');
});

$('.act-professional').on('click', function(e) {
    e.preventDefault();
    var student_id = $(this).data('student_id');

    $('#professionalModal form input[name="student_id"]').val(student_id);   

    $('#professionalModal').modal('show');
});
$('.act-language').on('click', function(e) {
    e.preventDefault();
    var student_id = $(this).data('student_id');

    $('#languageModal form input[name="student_id"]').val(student_id);   

    $('#languageModal').modal('show');
});

$('.act-knowledge').on('click', function(e) {
    e.preventDefault();
    var student_id = $(this).data('student_id');

    $('#knowledgeModal form input[name="student_id"]').val(student_id);   

    $('#knowledgeModal').modal('show');
});
/**
 * Limpar os filtros
 */
$('.clear-filters').click(function() {
    $(':input', '#filterForm')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .prop('checked', false)
        .prop('selected', false);
});
/**
 * Fim limpar os filtros
 */
/**

/**
 * Máscaras
 */
$(document).ready(function() {
    $('.input-telefone').each(function() {
        var phone = $(this).val().replace(/\D/g, '');
        if (phone.length > 10) {
            $(this).inputmask({
                "mask": "(99) 99999-9999",
                "placeholder": " "
            });
        } else {
            $(this).inputmask({
                "mask": "(99) 9999-99999",
                "placeholder": " "
            });
        }
    });

    $('.input-cep').inputmask({
        "mask": "99999-999",
        "placeholder": "_"
    });
    $('.input-cnpj').inputmask({
        "mask": "99.999.999/9999-99",
        "placeholder": "_"
    });
    $('.input-cpf').inputmask({
        "mask": "999.999.999-99",
        "placeholder": "_"
    });

    $(".input-cpfcnpj").focusout(function(){
        var tamanho = $(".input-cpfcnpj").val().length;
    
        if(tamanho < 15){
            $(".input-cpfcnpj").inputmask("999.999.999-99");
        } else {
            $(".input-cpfcnpj").inputmask("99.999.999/9999-99");
        }                   
    });
    $(".input-cpfcnpj").focusin(function(){
        $(".input-cpfcnpj").inputmask('remove');            
    });
    $('.input-date').inputmask({
        "mask": "99/99/9999",
        "placeholder": "_"
    });
});

$('.input-phone').focusout(function() {
    var phone = $(this).val().replace(/\D/g, '');
    if (phone.length > 10) {
        $(this).inputmask({
            "mask": "(99) 99999-9999",
            "placeholder": " "
        });
    } else {
        $(this).inputmask({
            "mask": "(99) 9999-9999",
            "placeholder": " "
        });
    }
});

$('.input-date').datepicker({
    language: 'pt-BR',
    format: 'dd/mm/yyyy',
    autoclose: true
});

$(".input-money").maskMoney({
    thousands: '.',
    decimal: ',',
    allowZero: true,
    symbolStay: true
});
/**
 * Fim máscaras
 */
$('.alert .close').click(function() {
    $(this).parent().hide();
});
</script>