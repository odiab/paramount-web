<?php
class Location
{
  private $data = null;

  public function __construct($data)
  {
    //TODO: validate
    $this->data = $data;
  }

  public function draw()
  {
    $site = $this->data;
    if ($site == null) {
      return;
    }

    $title = $site['title'];
    $name = $site['name'];
    $displayName = $name;
    if (isset($site['suffix'])) {
      $displayName .= ', ' . $site['suffix'];
      unset($suffix);
    }

    $description = $site['description'];
    $phone = intToPhone($site['phone']);
    $fax = intToPhone($site['fax']);
    $address = nl2br($site['address']);

    echo <<<HTML
    <div class='contactPaneContainer'>
      <div class='contactPane'>
        <h2>{$title}</h2>
        <h3>{$displayName}</h3>
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
            <td>Location:</td>
            <td>{$address}</td>
          </tr>
        </table>
      </div>
      <p>{$description}</p>
    </div>
HTML;
  }
}
