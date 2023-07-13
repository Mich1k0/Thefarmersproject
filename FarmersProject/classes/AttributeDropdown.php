<?php
class AttributeDropdown {
   private $connection;
   private $Region;
   private $Region_ID;

   public function __construct($connection, $Region, $Region_ID) {
      $this->connection = $connection;
      $this->Region = $Region;
      $this->Region_ID = $Region_ID;
   }

   public function generateDropdown() {
      // Retrieve the data from the table
      $query = "SELECT DISTINCT {$this->Region_ID} FROM {$this->Region}";
      $result = $this->connection->query($query);

      // Generate the HTML for the dropdown
      $dropdown = '<select name="Region_ID">';
      while ($row = $result->fetch_assoc()) {
         $attribute = $row[$this->Region_ID];
         $dropdown .= "<option value='{$Region_ID}'>{Region_ID}</option>";
      }
      $dropdown .= '</select>';

      return $dropdown;
   }
}
