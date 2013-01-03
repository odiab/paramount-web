<?php
class Employee
{
  private $data = null;

  public function __construct($data)
  {
    //TODO: validate
    $this->data = $data;
  }

  public function drawPane() {
    $employee = $this->data;
    if($employee == null) {
      return;
    }

    $name = $employee['name'];
    $displayName = $name;
    if (isset($employee['suffix'])) {
      $displayName .= ', ' . $employee['suffix'];
    }

    $title = $employee['title'];
    $phone = intToPhone($employee['phone']);
    $fax = intToPhone($employee['fax']);
    $email = $employee['email'] . '@paramountmedicalresearch.com';
    if (isset($employee['description'])) {
      $description = '<p>' . $employee['description'] . '</p>';
    } else {
      $description = '';
    }

    echo <<<HTML
    <div class='contactPaneContainer'>
      <div class='contactPane'>
        <h2>{$displayName}</h2>
        <h3>{$title}</h3>
        <table>
          <tr>
            <td>Phone:</td>
            <td>{$phone}</td>
          </tr>
          <tr>
            <td>Fax:</td>
            <td>{$fax}</td>
          </tr>
          <tr>
            <td>Email:</td>
            <td>
              <a href='mailto:{$email}'>{$email}</a>
            </td>
          </tr>
        </table>
      </div>
      {$description}
    </div>
HTML;
  }

  public function drawCard()
  {
    $employee = $this->data;
    if ($employee == null) {
      return;
    }

    $name = $employee['name'];
    $displayName = $name;
    if (isset($employee['suffix'])) {
      $displayName .= ', ' . $employee['suffix'];
      unset($suffix);
    }

    $title = $employee['title'];
    $phone = intToPhone($employee['phone']);
    $fax = intToPhone($employee['fax']);
    $email = $employee['email'] . '@paramountmedicalresearch.com';

    echo <<<HTML
    <div class='contactCard'>
      <h2>{$displayName}</h2>
      <h3>{$title}</h3>

      <table>
        <tr>
          <td>Phone:</td>
          <td>{$phone}</td>
        </tr>
        <tr>
          <td>Fax:</td>
          <td>{$fax}</td>
        </tr>
        <tr>
          <td>Email:</td>
          <td>
            <a href='{$email}'>{$email}</a>
          </td>
        </tr>
      </table>
    </div>
HTML;
  }
}
