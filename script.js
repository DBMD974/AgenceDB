// JavaScript (assurez-vous d'inclure jQuery si vous l'utilisez)
$(document).ready(function() {
    $('.favorite-button').click(function() {
      var card = $(this).closest('.property-card'); // Obtient la carte parente
      var cardId = $(this).data('id'); // Obtient l'ID unique de la carte
  
      $(this).toggleClass('favorited'); // Ajoute ou supprime la classe "favorited" à l'étoile
  
      if ($(this).hasClass('favorited')) {
        // Copie la carte vers la page "Favoris"
        var clonedCard = card.clone();
        clonedCard.appendTo('.favorites-list');
      } else {
        // Supprime la carte de la page "Favoris"
        $('.favorites-list .property-card[data-id="' + cardId + '"]').remove();
      }
    });
  });
  