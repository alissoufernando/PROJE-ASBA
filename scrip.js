
$(function() {
$('#complete').click(function() {
$('#annuler').show('slow');
$('#complet').first().show('slow', function showNextOne() {
$(this).next('#complet').show('slow', showNextOne);
});
});
$('#annuler').click(function() {
$('#complet').first().show('slow', function hideNextOne(){
$(this).next('#complet').hide('slow', hideNextOne);
});
})
});

