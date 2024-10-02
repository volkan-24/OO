document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        const monthlyIncome = document.getElementById('monthly_income').value;
        const householdSize = document.getElementById('household_size').value;
        const childrenNumber = document.getElementById('children_number').value;
        const monthlyExpenditure = document.getElementById('monthly_expenditure').value;
        
        if (monthlyIncome <= 0 || householdSize <= 0 || childrenNumber < 0 || monthlyExpenditure <= 0) {
            alert('Please enter valid positive numbers for income, household size, number of children, and expenditure.');
            event.preventDefault();
        }
    });
});
