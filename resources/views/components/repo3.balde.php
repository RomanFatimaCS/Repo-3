<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Management System</title>

  <!-- ============================================
       SECTION 1: CSS STYLING START
       ============================================ -->
  <style>
    /* ---------- Reset ---------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Arial, sans-serif;
    }

    /* ---------- Body ---------- */
    body {
      background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
      min-height: 100vh;
      padding: 30px;
    }

    /* ---------- Container ---------- */
    .container {
      max-width: 900px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    /* ---------- Header ---------- */
    h1 {
      text-align: center;
      color: #2e7d32;
      margin-bottom: 5px;
      font-size: 32px;
    }

    .subtitle {
      text-align: center;
      color: #888;
      font-size: 14px;
      margin-bottom: 25px;
    }

    /* ---------- Form Section ---------- */
    .form-box {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr auto;
      gap: 10px;
      margin-bottom: 20px;
    }

    .form-box input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .form-box button {
      padding: 10px 20px;
      background: #2e7d32;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    .form-box button:hover {
      background: #1b5e20;
    }

    /* ---------- Search ---------- */
    .search-box {
      margin-bottom: 15px;
    }

    .search-box input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    /* ---------- Table ---------- */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 15px;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #eee;
    }

    th {
      background: #2e7d32;
      color: #fff;
    }

    tr:hover {
      background: #f1f8e9;
    }

    /* ---------- Delete Button ---------- */
    .delete-btn {
      background: #e74c3c;
      color: #fff;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
    }

    .delete-btn:hover {
      background: #c0392b;
    }

    /* ---------- Footer ---------- */
    .footer {
      text-align: right;
      font-weight: bold;
      color: #2e7d32;
      margin-top: 10px;
    }

    /* ---------- Stats Box ---------- */
    .stats {
      display: flex;
      justify-content: space-around;
      margin-top: 25px;
      padding: 15px;
      background: #f1f8e9;
      border-radius: 8px;
    }

    .stats div {
      text-align: center;
    }

    .stats h3 {
      color: #2e7d32;
      font-size: 24px;
    }

    .stats p {
      color: #666;
      font-size: 13px;
    }
  </style>
  <!-- ============================================
       SECTION 1: CSS STYLING END
       ============================================ -->

</head>
<body>

  <!-- ============================================
       SECTION 2: MAIN CONTAINER START
       ============================================ -->
  <div class="container">

    <!-- ============================================
         SECTION 2.1: HEADER
         ============================================ -->
    <h1>Hospital Management System</h1>
    <p class="subtitle">Student: Your Name | Reg No: 2022-GWG-1076</p>

    <!-- ============================================
         SECTION 2.2: ADD PATIENT FORM
         ============================================ -->
    <div class="form-box">
      <input type="text" id="pname" placeholder="Patient Name">
      <input type="text" id="pdisease" placeholder="Disease">
      <input type="text" id="pdoctor" placeholder="Doctor">
      <button onclick="addPatient()">Add Patient</button>
    </div>

    <!-- ============================================
         SECTION 2.3: SEARCH BOX
         ============================================ -->
    <div class="search-box">
      <input type="text" id="search" placeholder="Search patient..." oninput="searchPatient()">
    </div>

    <!-- ============================================
         SECTION 2.4: PATIENTS TABLE
         ============================================ -->
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Disease</th>
          <th>Doctor</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
        <!-- Data JavaScript se aayega -->
      </tbody>
    </table>

    <!-- ============================================
         SECTION 2.5: TOTAL COUNT
         ============================================ -->
    <p class="footer" id="total">Total Patients: 0</p>

    <!-- ============================================
         SECTION 2.6: STATS BOX
         ============================================ -->
    <div class="stats">
      <div>
        <h3 id="totalStat">0</h3>
        <p>Total Patients</p>
      </div>
      <div>
        <h3 id="doctorStat">0</h3>
        <p>Doctors</p>
      </div>
      <div>
        <h3 id="diseaseStat">0</h3>
        <p>Diseases</p>
      </div>
    </div>

  </div>
  <!-- ============================================
       SECTION 2: MAIN CONTAINER END
       ============================================ -->

  <!-- ============================================
       SECTION 3: JAVASCRIPT START
       ============================================ -->
  <script>

    /* ---------- 3.1: Patients Data Array ---------- */
    let patients = [
      { name: "Ali Ahmed", disease: "Fever", doctor: "Dr. Khan" },
      { name: "Sara Khan", disease: "Flu", doctor: "Dr. Ahmed" },
      { name: "Bilal Raza", disease: "Cough", doctor: "Dr. Khan" }
    ];

    /* ---------- 3.2: Page Load ---------- */
    window.onload = function () {
      renderTable();
    };

    /* ---------- 3.3: Add Patient Function ---------- */
    function addPatient() {
      let name = document.getElementById("pname").value.trim();
      let disease = document.getElementById("pdisease").value.trim();
      let doctor = document.getElementById("pdoctor").value.trim();

      if (name === "" || disease === "" || doctor === "") {
        alert("Please fill all fields!");
        return;
      }

      patients.push({ name: name, disease: disease, doctor: doctor });

      document.getElementById("pname").value = "";
      document.getElementById("pdisease").value = "";
      document.getElementById("pdoctor").value = "";

      renderTable();
    }

    /* ---------- 3.4: Render Table Function ---------- */
    function renderTable() {
      let tbody = document.getElementById("tableBody");
      tbody.innerHTML = "";

      patients.forEach((p, index) => {
        let row = `
          <tr>
            <td>${index + 1}</td>
            <td>${p.name}</td>
            <td>${p.disease}</td>
            <td>${p.doctor}</td>
            <td><button class="delete-btn" onclick="deletePatient(${index})">Delete</button></td>
          </tr>
        `;
        tbody.innerHTML += row;
      });

      document.getElementById("total").innerText = "Total Patients: " + patients.length;
      updateStats();
    }

    /* ---------- 3.5: Delete Patient Function ---------- */
    function deletePatient(index) {
      if (confirm("Delete this patient?")) {
        patients.splice(index, 1);
        renderTable();
      }
    }

    /* ---------- 3.6: Search Function ---------- */
    function searchPatient() {
      let query = document.getElementById("search").value.toLowerCase();
      let rows = document.querySelectorAll("#tableBody tr");

      rows.forEach((row) => {
        let text = row.innerText.toLowerCase();
        row.style.display = text.includes(query) ? "" : "none";
      });
    }

    /* ---------- 3.7: Update Stats Function ---------- */
    function updateStats() {
      let doctors = new Set(patients.map(p => p.doctor));
      let diseases = new Set(patients.map(p => p.disease));

      document.getElementById("totalStat").innerText = patients.length;
      document.getElementById("doctorStat").innerText = doctors.size;
      document.getElementById("diseaseStat").innerText = diseases.size;
    }
        <!-- ============================================
         SECTION 2.7: DOCTORS LIST (NEW PART)
         ============================================ -->
    <div class="doctors-section">
      <h2>Doctors on Duty</h2>

      <div class="doctor-input">
        <input type="text" id="docName" placeholder="Doctor Name">
        <input type="text" id="docSpec" placeholder="Specialization">
        <button onclick="addDoctor()">Add Doctor</button>
      </div>

      <div class="doctor-list" id="doctorList">
        <!-- Doctors JavaScript se aayenge -->
      </div>
    </div>

    /* ---------- 3.8: Console Info ---------- */
    console.log("Hospital Management System Loaded");
    console.log("Reg No: 2022-GWG-1076");

  </script>
  <!-- ============================================
       SECTION 3: JAVASCRIPT END
       ============================================ -->

</body>
</html>