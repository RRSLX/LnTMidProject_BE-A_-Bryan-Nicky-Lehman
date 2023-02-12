let employeeDataContainer = document.querySelector("#employee-data");

// Create the table headers
let tableHeaders = ["Name", "Department", "Salary"];

// Create a function to generate table rows
function generateTableRows(employee) {
  let tableRow = document.createElement("tr");

  let nameCell = document.createElement("td");
  nameCell.textContent = employee.name;
  tableRow.appendChild(nameCell);

  let departmentCell = document.createElement("td");
  departmentCell.textContent = employee.department;
  tableRow.appendChild(departmentCell);

  let salaryCell = document.createElement("td");
  salaryCell.textContent = employee.salary;
  tableRow.appendChild(salaryCell);

  return tableRow;
}

// Create a function to generate the table
function generateTable(employees) {
  let table = document.createElement("table");

  let tableHeaderRow = document.createElement("tr");
  tableHeaders.forEach(header => {
    let tableHeader = document.createElement("th");
    tableHeader.textContent = header;
    tableHeaderRow.appendChild(tableHeader);
  });
  table.appendChild(tableHeaderRow);

  employees.forEach(employee => {
    let tableRow = generateTableRows(employee);
    table.appendChild(tableRow);
  });

  return table;
}

// Clear any existing content inside the employee data container
employeeDataContainer.innerHTML = "";

// Generate the table and append it to the employee data container
let employeeTable = generateTable(employees);
employeeDataContainer.appendChild(employeeTable);