<?php
Assets::load(HELPER, 'contactHelpers');
Assets::load(MODEL, 'Employee');
?>
<h1>Meet Our Staff</h1>
<p>
  The staff at Paramount is made up of professionals who bring experiences from
  a variety of settings. These include clinical research at the major teaching
  hospitals emergency care, diabetes management, and medical and nursing care
  in rheumatology, nephrology, cardiovascular disease and more.
</p>

<p>
  In addition, many of Dr. Diab’s colleagues are physicians who practice
  internal medicine, endocrinology, gastroenterology, infectious disease, and
  pulmonary and cardiovascular conditions.
</p>


<div class="contactSection">
  <?php
  // populate contact panes

  $employees = array();
  $employees[] = array(
    'name' => 'Isam A. Diab',
    'suffix' => 'M.D.',
    'title' => 'Principal Investigator',
    'phone' => 4408260742,
    'fax' => 4408911576,
    'email' => 'idiab',
    'description' => 'Dr. Isam A. Diab specializes in rheumatology and has been conducting clinical research for nearly 20 years as both a Principal-Investigator and Sub-Investigator. Maintaining collaboration with approximately 75 private practitioners in a large multi-disciplinary network, Dr. Diab has grown his private practice into one of the largest within the United States. His thorough understanding of medicine along with enthusiasm for patient needs is clearly seen throughout his oversight of the clinical research process. Dr. Diab has treated individuals over the vast spectrum of immunological diseases, including rheumatoid arthritis, systemic lupus erythmatosus, lupus nephritis, osteoporosis, psoriatic arthritis, gout conditions and more. Because of his experience and dedication to the profession, Dr. Diab is highly sought after by major pharmaceutical companies as both an investigator and speaker.',
  );
  $employees[] = array(
    'name' => 'Mirza I. Baig',
    'suffix' => 'M.D.',
    'title' => 'Sub-investigator',
    'phone' => 4408260742,
    'fax' => 4408911576,
    'email' => 'mbaig',
    'description' => 'Dr. Mirza I. Baig supports the clinical research  process in his role as Sub-Investigator. He maintains a vibrant practice of his  own in the area of physical medicine.',
  );
  $employees[] = array(
    'name' => 'Theresa Sedlak-Hanslik',
    'suffix' => 'RN, CCRC, CDE',
    'title' => 'Site Manager, Clinical Research Nurse',
    'phone' => 4408260742,
    'fax' => 4408911576,
    'email' => 'tsedlak-hanslik',
  );

  foreach ($employees as $employee) {
    $emp = new Employee($employee);
    $emp->drawPane();
  }
  ?>
</div>
<hr />
<div class="contactSection">
  <?php
  // populate contact cards

  $employees = array();
  $employees[] = array(
    'name' => 'Luzmaria Jaén',
    'suffix' => 'RN',
    'title' => 'Senior Research Coordinator',
    'phone' => 4408260742,
    'fax' => 4408911576,
    'email' => 'ljaen',
  );
  $employees[] = array(
    'name' => 'Jackie Reghi',
    'suffix' => 'RN',
    'title' => 'Study Coordinator/Infusion Nurse',
    'phone' => 4408260742,
    'fax' => 4408911576,
    'email' => 'jreghi',
  );
  $employees[] = array(
    'name' => 'Mazen Allouni',
    'suffix' => 'M.D.',
    'title' => 'Study Coordinator',
    'phone' => 4408260742,
    'fax' => 4408911576,
    'email' => 'mallouni',
  );
  $employees[] = array(
    'name' => 'Ellen Titsch',
    'suffix' => 'RN',
    'title' => 'Study Coordinator/Infusion Nurse',
    'phone' => 4408260742,
    'fax' => 4408911576,
    'email' => 'etitsch',
  );
  $employees[] = array(
    'name' => 'Linda Cavanaugh',
    'suffix' => 'MA',
    'title' => 'Research Assistant',
    'phone' => 4408260742,
    'fax' => 4408911576,
    'email' => 'lcavanaugh',
  );
  $employees[] = array(
    'name' => 'Kerry Van Keuren',
    'title' => 'Accountant',
    'phone' => 4408260742,
    'fax' => 4408911576,
    'email' => 'kvankeuren',
  );
  $employees[] = array(
    'name' => 'Tracey Plummer',
    'suffix' => 'MA, CNA',
    'title' => 'Research Assistant',
    'phone' => 4408260742,
    'fax' => 4408911576,
    'email' => 'tplummer',
  );

  foreach ($employees as $employee) {
    $emp = new Employee($employee);
    $emp->drawCard();
  }
  ?>
</div>
