<?php ## работа со временем по GMT
    // вычисляет timestamp в Гринвиче, который соответствует
    // локальному timestamp-формату
    function local2gm($localStamp = false) : int
    {
        if ($localStamp === false) $localStamp = time();
        // получаем смещение часовой зоны в секундах
        $tzOffset = date("Z", $localStamp);
        // вычитаем разницу - получаем время по GMT
        return $localStamp - $tzOffset;
    }

    // вычисляем локаьный timestamp в Гринвиче, который соответствует
    // timestamp-формату по GMT. Можно указать смещение локальной 
    // зоны относительно GMT (в часах), тогда будет осуществлен 
    // перевод в эту зону (а не в текущую локальную).
    function gm2local($gmStamp = false, $tzOffset = false) : int
    {
        if ($gmStamp === false) return time();
        // получаем смещение часовой зоны в секундах
        if ($tzOffset === false) $tzOffset = date("Z", $gmStamp);
        else $tzOffset *= 60 * 60;
        // вычитаем разницу - получаем время по GMT
        return $gmStamp + $tzOffset;
    } 
?>