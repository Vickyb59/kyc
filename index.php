<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Starta KYC</title>
</head>

<body>

<link href="kyc-form.css" rel="stylesheet">

<div class="fcf-body">

    <div id="fcf-form">
    <h2 class="fcf-h3" style="text-align: center;">KYC ACCREDITATION</h2>

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="kyc-process.php" enctype="multipart/form-data">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Full Name</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Username</label>
            <div class="fcf-input-group">
                <input type="text" id="Username" name="username" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Profession</label>
            <div class="fcf-input-group">
                <input list="profession" id="Profession" name="profession" class="fcf-form-control" required>

                <datalist id="profession">
                    <optgroup label="Healthcare Practitioners and Technical Occupations:">
                      <option value="Chiropractor" >
                      <option value="Dentist" >
                      <option value="Dietitian or Nutritionist" >
                      <option value="Optometrist" >
                      <option value="Pharmacist" >
                      <option value="Physician" >
                      <option value="Physician Assistant" >
                      <option value="Podiatrist" >
                      <option value="Registered Nurse" >
                      <option value="Therapist" >
                      <option value="Veterinarian" >
                      <option value="Health Technologist or Technician" >
                      <option value="Other Healthcare Practitioners and Technical Occupation" >
                    </optgroup>
                    <optgroup label="Healthcare Support Occupations:">
                      <option value="Nursing, Psychiatric, or Home Health Aide" >
                      <option value="Occupational and Physical Therapist Assistant or Aide" >
                      <option value="Other Healthcare Support Occupation" >
                    </optgroup>
                    <optgroup label="Business, Executive, Management, and Financial Occupations:">
                      <option value="Chief Executive" >
                      <option value="General and Operations Manager" >
                      <option value="Advertising, Marketing, Promotions, Public Relations, and Sales Manager" >
                      <option value="Operations Specialties Manager (e.g., IT or HR Manager)" >
                      <option value="Construction Manager" >
                      <option value="Engineering Manager" >
                      <option value="Accountant, Auditor" >
                      <option value="Business Operations or Financial Specialist" >
                      <option value="Business Owner" >
                      <option value="Other Business, Executive, Management, Financial Occupation" >
                    </optgroup>
                    <optgroup label="Architecture and Engineering Occupations:">
                      <option value="Architect, Surveyor, or Cartographer" >
                      <option value="Engineer" >
                      <option value="Other Architecture and Engineering Occupation" >
                    </optgroup>
                    <optgroup label="Education, Training, and Library Occupations:">
                      <option value="Postsecondary Teacher (e.g., College Professor)" >
                      <option value="Primary, Secondary, or Special Education School Teacher" >
                      <option value="Other Teacher or Instructor" >
                      <option value="Other Education, Training, and Library Occupation" >
                    </optgroup>
                    <optgroup label="Other Professional Occupations:">
                      <option value="Arts, Design, Entertainment, Sports, and Media Occupations" >
                      <option value="Computer Specialist, Mathematical Science" >
                      <option value="Counselor, Social Worker, or Other Community and Social Service Specialist" >
                      <option value="Lawyer, Judge" >
                      <option value="Life Scientist (e.g., Animal, Food, Soil, or Biological Scientist, Zoologist)" >
                      <option value="Physical Scientist (e.g., Astronomer, Physicist, Chemist, Hydrologist)" >
                      <option value="Religious Worker (e.g., Clergy, Director of Religious Activities or Education)" >
                      <option value="Social Scientist and Related Worker" >
                      <option value="Other Professional Occupation" >
                    </optgroup>
                    <optgroup label="Office and Administrative Support Occupations:">
                      <option value="Supervisor of Administrative Support Workers" >
                      <option value="Financial Clerk" >
                      <option value="Secretary or Administrative Assistant" >
                      <option value="Material Recording, Scheduling, and Dispatching Worker" >
                      <option value="Other Office and Administrative Support Occupation" >
                    </optgroup>
                    <optgroup label="Services Occupations:">
                      <option value="Protective Service (e.g., Fire Fighting, Police Officer, Correctional Officer)" >
                      <option value="Chef or Head Cook" >
                      <option value="Cook or Food Preparation Worker" >
                      <option value="Food and Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)" >
                      <option value="Building and Grounds Cleaning and Maintenance" >
                      <option value="Personal Care and Service (e.g., Hairdresser, Flight Attendant, Concierge)" >
                      <option value="Sales Supervisor, Retail Sales" >
                      <option value="Retail Sales Worker" >
                      <option value="Insurance Sales Agent" >
                      <option value="Sales Representative" >
                      <option value="Real Estate Sales Agent" >
                      <option value="Other Services Occupation" >
                    </optgroup>
                    <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations:">
                      <option value="Construction and Extraction (e.g., Construction Laborer, Electrician)" >
                      <option value="Farming, Fishing, and Forestry" >
                      <option value="Installation, Maintenance, and Repair" >
                      <option value="Production Occupations" >
                      <option value="Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation" >
                    </optgroup>
                    <optgroup label="Transportation Occupations:">
                      <option value="Aircraft Pilot or Flight Engineer" >
                      <option value="Motor Vehicle Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)" >
                      <option value="Other Transportation Occupation" >
                    </optgroup>
                    <optgroup label="Tech Occupations:">
                      <option value="Software Engineer" >
                      <option value="Data Analyst" >
                      <option value="Business Developer" >
                    </optgroup>
                    <optgroup label="Other Occupations:">
                      <option value="Military" >
                      <option value="Homemaker" >
                      <option value="Other Occupation" >
                    </optgroup>
                </datalist>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Net Worth</label>
            <div class="fcf-input-group">
                <select id="NetWorth" name="networth" class="fcf-form-control" required>
                   <option value="$50K - $100K">$50K - $100K</option>
                   <option value="$100K - $250K">$100K - $250K</option>
                   <option value="$250K - $500K">$250K - $500K</option>
                   <option value="$500K - $1M">$500K - $1M</option>
                </select>
            </div>
        </div>

        <div class="flex-bs">

            <div class="fcf-form-group bs-50">
                <label for="Email" class="fcf-label">Valid ID (International Passport or Drivers License)</label>
                <div class="fcf-input-group">
                    <input type="file" name="validid" class="fcf-form-control" required>
                </div>
            </div>

            <div class="fcf-form-group bs-pl-10 bs-50">
                <label for="Email" class="fcf-label">Bank statement Upto Six(6) Months</label>
                <div class="fcf-input-group">
                    <input type="file" name="bankstatement" class="fcf-form-control" class="fcf-form-control" required>
                </div>
            </div>
            
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Any Additional Information (Optional)</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="message" class="fcf-form-control" rows="6" maxlength="3000"></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Submit</button>
        </div>

        <div class="fcf-credit" id="fcf-credit">
        Totally Secured and Powered by Startacap & Sectigo: <a href="https://www.startacap.com" target="_blank">www.startacap.com</a>
        </div>

    </form>
    </div>

</div>

</body>
</html>