<?php

/**
 * Muestra errores en formato de alerta de Bootstrap.
 *
 * @param array|string $errors Array de errores o un solo mensaje de error.
 * 
 * Si $errors es un array, se listan todos los errores. Si es un string, se muestra como un único error.
 */
function showError($errors)
{
  if (!empty($errors)) {
    echo 
    "<div class='p-2'>
      <div class='d-flex justify-content-center align-items-center w-100 mt-3'>
        <div class='alert alert-danger col-4'>
          <ul class='mb-0'>";
    if (is_array($errors)) {
      foreach ($errors as $error) {
        echo "<li>$error</li>";
      }
    } else {
      // Si es solo un string
      echo "<li>$errors</li>";
    }
    echo "</ul>
      </div>
    </div>
  </div>";
  }

}
