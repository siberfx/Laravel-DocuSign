<?php

namespace App;

class Json
{
    public static function getTest()
    {
        return '{
        "insured": {
      "firstName": "James",
      "middleName": "R",
      "lastName": "Bond",
      "email": "bond@usa.com",
      "emailConfirm": "bond@usa.com",
      "gender": "Male",
      "ss": "111-22-3333",
      "address": "70-41 Olcott Street",
      "city": "Forest Hills",
      "state": "NY",
      "zip": "11375",
      "dob": "01/01/1980",
      "birthCountry": "USA",
      "birthState": "AL",
      "citizenship": "USA",
      "visaType": null,
      "hasLicense": "Yes",
      "driverState": "AL",
      "driverNumber": "123",
      "phonePersonal": "(111) 111-1111",
      "phoneBusiness": "(222) 222-2222",
      "occupation": "Employed",
      "duties": "Accountant",
      "dutiesOther": null,
      "employer": "ABC Company",
      "armedForces": "No",
      "salary": "12,000",
      "otherIncome": "13,000",
      "netWorth": "14,000",
      "bankrupt": {
        "value": "Yes",
        "details": "Other explanation"
      }},
  "groupA": [
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "High Blood Pressure (BP)",
        "Other"
      ],
      "name": "High Blood Pressure",
      "id": 1,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": true,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": true,
        "cpa": true,
        "hos": true,
        "med": true,
        "phy": true,
        "rad": true,
        "sur": true,
        "inj": true,
        "none": false,
        "other": true
      },
      "treatmentOther": "",
      "hasOptions": true
    },
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "Grave\'s Disease",
        "Hashimoto\'s thyroiditis",
        "Hyperthyroidism",
        "Hypothyroidism",
        "Thyroid Nodules",
        "Other"
      ],
      "name": "Disorders of the Thyroid or Other Glands",
      "id": 3,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": null,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": false,
        "cpa": false,
        "hos": false,
        "med": false,
        "phy": false,
        "rad": false,
        "sur": false,
        "inj": false,
        "none": false,
        "other": false
      },
      "treatmentOther": "",
      "hasOptions": true
    },
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "Anxiety",
        "Obsessive Compulsive Disorder (OCD)",
        "Panic Attack/Disorder",
        "Other"
      ],
      "name": "Anxiety",
      "id": 6,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": null,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": false,
        "cpa": false,
        "hos": false,
        "med": false,
        "phy": false,
        "rad": false,
        "sur": false,
        "inj": false,
        "none": false,
        "other": false
      },
      "treatmentOther": "",
      "hasOptions": true,
      "restrictedActivities": null,
      "symptomsFrequency": null,
      "hospitalTreatment": null,
      "treatmentAdditional": null,
      "treatmentAdditionalDetails": null,
      "otherMental": null,
      "hospitalTreatmentDate": null
    },
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "Depression",
        "Postpartum Depression",
        "Seasonal Affective Disorder (SAD)",
        "Other"
      ],
      "name": "Mild Depression",
      "id": 7,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": null,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": false,
        "cpa": false,
        "hos": false,
        "med": false,
        "phy": false,
        "rad": false,
        "sur": false,
        "inj": false,
        "none": false,
        "other": false
      },
      "treatmentOther": "",
      "hasOptions": true,
      "specificDiagnosis": null,
      "treatmentAdditional": null,
      "treatmentAdditionalDetails": null,
      "hospitalTreatment": null,
      "hospitalizedDate": null,
      "disorderTreatment": null,
      "restrictedActivities": null
    },
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "High Cholesterol",
        "High Triglycerides",
        "Other"
      ],
      "name": "High Cholesterol",
      "id": 2,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": null,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": false,
        "cpa": false,
        "hos": false,
        "med": false,
        "phy": false,
        "rad": false,
        "sur": false,
        "inj": false,
        "none": false,
        "other": false
      },
      "treatmentOther": "",
      "hasOptions": true
    },
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "Allergic asthma",
        "Asthma",
        "Exercise induced asthma",
        "Reactive Airways",
        "Other"
      ],
      "name": "Asthma",
      "id": 4,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": null,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": false,
        "cpa": false,
        "hos": false,
        "med": false,
        "phy": false,
        "rad": false,
        "sur": false,
        "inj": false,
        "none": false,
        "other": false
      },
      "treatmentOther": "",
      "hasOptions": true,
      "lastOccurrence": null,
      "frequency": null,
      "steroidsTaken": null,
      "steroidsTakenDate": null,
      "hospitalized": null,
      "hospitalizedDate": null,
      "missedWork": null,
      "missedWorkDetails": ""
    },
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "Obstructive Sleep Apnea (OSA)",
        "Sleep Apnea",
        "Other"
      ],
      "name": "Sleep Apnea",
      "id": 5,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": null,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": false,
        "cpa": false,
        "hos": false,
        "med": false,
        "phy": false,
        "rad": false,
        "sur": false,
        "inj": false,
        "none": false,
        "other": false
      },
      "treatmentOther": "",
      "hasOptions": true,
      "sleepStudy": null,
      "sleepStudyDate": null,
      "diagnosedAs": null,
      "treatmentPrescribed": null,
      "treatmentPrescribedCPAP": null,
      "treatmentPrescribedCPAPfrequency": null,
      "treatmentPrescribedOtherDetails": null
    }
  ],
  "groupB": [
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "Degenerative Arthritis",
        "Degenerative Joint Disease (DJD)",
        "Osteoarthritis",
        "Other"
      ],
      "name": "Osteoarthritis",
      "id": 1,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": null,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": false,
        "cpa": false,
        "hos": false,
        "med": false,
        "phy": false,
        "rad": false,
        "sur": false,
        "inj": false,
        "none": false,
        "other": false
      },
      "treatmentOther": "",
      "hasOptions": true
    },
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "Osteopenia",
        "Osteoporosis",
        "Other"
      ],
      "name": "Osteoporosis",
      "id": 2,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": null,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": false,
        "cpa": false,
        "hos": false,
        "med": false,
        "phy": false,
        "rad": false,
        "sur": false,
        "inj": false,
        "none": false,
        "other": false
      },
      "treatmentOther": "",
      "hasOptions": true
    },
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "Ankylosing Spondylitis",
        "Bursitis",
        "Chronic Fatigue",
        "Gout",
        "Herniated Disc",
        "Joint Replacement",
        "Sciatica",
        "Tendonitis",
        "Other"
      ],
      "name": "Other Bone, Joint or Muscle Disorders",
      "id": 3,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": null,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": false,
        "cpa": false,
        "hos": false,
        "med": false,
        "phy": false,
        "rad": false,
        "sur": false,
        "inj": false,
        "none": false,
        "other": false
      },
      "treatmentOther": "",
      "hasOptions": true,
      "steroids": null,
      "steroidsDate": "",
      "specificDiagnosis": null,
      "severity": null,
      "surgery": null,
      "surgeryType": "",
      "surgeryDate": "",
      "useAids": null,
      "useAidsType": "",
      "useAidsTypeOther": "",
      "missedWork": null
    }
  ],
  "groupC": [
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "Acoustic Neuroma",
        "Adenoma",
        "Colon Polyp",
        "Breast Cyst",
        "Benign Cyst",
        "Meningioma",
        "Pre-cancerous Lesion",
        "Other"
      ],
      "name": "Benign Tumor",
      "id": 1,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": null,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": false,
        "cpa": false,
        "hos": false,
        "med": false,
        "phy": false,
        "rad": false,
        "sur": false,
        "inj": false,
        "none": false,
        "other": false
      },
      "treatmentOther": "",
      "hasOptions": true,
      "areaAffected": null,
      "areaAffectedOther": "",
      "malignant": null,
      "surveillance": null,
      "conditionResolved": null,
      "treatmentAdditional": null,
      "treatmentAdditionalDate": null,
      "treatmentAdditionalDetails": "",
      "surveillanceType": null,
      "surveillanceTypeOther": "",
      "conditionResolvedDate": null
    },
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "B12 Deficiency",
        "Low iron/Iron Deficiency",
        "Other"
      ],
      "name": "Mild Iron Deficiency Anemia",
      "id": 3,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": null,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": false,
        "cpa": false,
        "hos": false,
        "med": false,
        "phy": false,
        "rad": false,
        "sur": false,
        "inj": false,
        "none": false,
        "other": false
      },
      "treatmentOther": "",
      "hasOptions": true
    },
    {
      "condition": null,
      "conditionOther": "",
      "conditionOptions": [
        "Crohn\'s Disease",
        "Proctitis",
        "Ulcerative Colitis",
        "Other"
      ],
      "name": "Crohn\'s/Ulcerative Colitis",
      "id": 2,
      "selected": true,
      "reset": false,
      "primaryPhysicianCheck": null,
      "physicianName": null,
      "physicianAddress": null,
      "physicianPhone": null,
      "hospitalName": null,
      "hospitalAddress": null,
      "hospitalPhone": null,
      "onSetDate": null,
      "duration": null,
      "treatment": {
        "che": false,
        "cpa": false,
        "hos": false,
        "med": false,
        "phy": false,
        "rad": false,
        "sur": false,
        "inj": false,
        "none": false,
        "other": false
      },
      "treatmentOther": "",
      "hasOptions": true,
      "treatmentAdditional": null,
      "treatmentAdditionalDetails": "",
      "symptomsDate": null,
      "takenSteroids": null,
      "takenSteroidsDate": null,
      "hadSurgery": null,
      "hadSurgeryType": null,
      "hadSurgeryDate": null,
      "hadSurgeryTypeDetails": "",
      "hasComplications": null,
      "hasComplicationsDetails": "",
      "emergencyRoom": null,
      "disability": null
    }
  ],
  "conditionsHeart": [
    {
      "name": "Arrhythmia/Irregular Heartbeat",
      "id": 1,
      "selected": true,
      "reset": false
    },
    {
      "name": "Cardiac Chest Pains",
      "id": 2,
      "selected": true,
      "reset": false
    },
    {
      "name": "Coronary Artery Disease",
      "id": 3,
      "selected": true,
      "reset": false
    },
    {
      "name": "Heart Attack",
      "id": 4,
      "selected": true,
      "reset": false
    },
    {
      "name": "Heart Murmur/Valvular Heart Disease",
      "id": 5,
      "selected": true,
      "reset": false
    },
    {
      "name": "Other Disorders of the Heart or Blood Vessels",
      "id": 6,
      "selected": true,
      "reset": false
    }
  ],
  "conditionsVascular": [
    {
      "name": "Peripheral Vascular Disease",
      "id": 1,
      "selected": true,
      "reset": false
    },
    {
      "name": "Stroke",
      "id": 2,
      "selected": true,
      "reset": false
    },
    {
      "name": "Transient Ischemic Attack (TIA)",
      "id": 3,
      "selected": true,
      "reset": false
    }
  ],
  "conditionsDiabetes": [
    {
      "name": "Diabetes",
      "id": 1,
      "selected": true,
      "reset": false
    },
    {
      "name": "High Blood Sugar",
      "id": 2,
      "selected": true,
      "reset": false
    },
    {
      "name": "Glucose Intolerance",
      "id": 3,
      "selected": true,
      "reset": false
    },
    {
      "name": "Pre-diabetes",
      "id": 4,
      "selected": true,
      "reset": false
    }
  ],
  "conditionsCognitive": [
    {
      "name": "Alzheimer\'s Disease/Dementia",
      "id": 1,
      "selected": true,
      "reset": false
    },
    {
      "name": "Bipolar Disorder",
      "id": 2,
      "selected": true,
      "reset": false
    },
    {
      "name": "Cognitive Impairment/Memory Loss",
      "id": 3,
      "selected": true,
      "reset": false
    },
    {
      "name": "Major Depression",
      "id": 4,
      "selected": true,
      "reset": false
    },
    {
      "name": "Other Mental Nervous Disorders (i.e.: Psychosis, Schizophrenia)",
      "id": 5,
      "selected": true,
      "reset": false
    }
  ],
  "conditionsLungs": [
    {
      "name": "Chronic Obstructive Pulmonary Disease/Chronic Bronchitis/Emphysema",
      "id": 1,
      "selected": true,
      "reset": false
    },
    {
      "name": "Sarcoidosis",
      "id": 2,
      "selected": true,
      "reset": false
    }
  ],
  "conditionsGastrointestinal": [
    {
      "name": "Barrett\'s Esophagus",
      "id": 1,
      "selected": true,
      "reset": false
    },
    {
      "name": "Cirrhosis",
      "id": 2,
      "selected": true,
      "reset": false
    },
    {
      "name": "Hepatitis B or C",
      "id": 3,
      "selected": true,
      "reset": false
    },
    {
      "name": "Kidney Disease",
      "id": 4,
      "selected": true,
      "reset": false
    },
    {
      "name": "Pancreatitis",
      "id": 5,
      "selected": true,
      "reset": false
    }
  ],
  "conditionsCancer": [
    {
      "name": "Cancer/Malignancy (excluding Basal Cell and Squamous Cell skin cancers)",
      "id": 1,
      "selected": true,
      "reset": false
    },
    {
      "name": "Familal Polyposis",
      "id": 2,
      "selected": true,
      "reset": false
    }
  ],
  "conditionsOther": [
    {
      "name": "Anemia (excluding mild iron deficiency)/Blood Disorders",
      "id": 1,
      "selected": true,
      "reset": false
    },
    {
      "name": "Autoimmune Disorders",
      "id": 2,
      "selected": true,
      "reset": false
    },
    {
      "name": "Connective Tissue Disease",
      "id": 3,
      "selected": true,
      "reset": false
    },
    {
      "name": "Rheumatoid Arthritis",
      "id": 4,
      "selected": true,
      "reset": false
    }
  ],
  "conditionsNervous": [
    {
      "name": "Epilepsy/Seizure Disorder",
      "id": 1,
      "selected": true,
      "reset": false
    },
    {
      "name": "Multiple Sclerosis",
      "id": 2,
      "selected": true,
      "reset": false
    },
    {
      "name": "Muscular Dystrophy",
      "id": 3,
      "selected": true,
      "reset": false
    },
    {
      "name": "Paralysis",
      "id": 4,
      "selected": true,
      "reset": false
    },
    {
      "name": "Parkinson\'s Disease",
      "id": 5,
      "selected": true,
      "reset": false
    }
  ]
}';
    }

    public static function newJson()
    {
        return '  {
    "insured": {
      "firstName": "James",
      "middleName": "R",
      "lastName": "Bond",
      "email": "bond@usa.com",
      "emailConfirm": "bond@usa.com",
      "gender": "Male",
      "ss": "111-22-3333",
      "address": "70-41 Olcott Street",
      "city": "Forest Hills",
      "state": "NY",
      "zip": "11375",
      "dob": "01/01/1980",
      "birthCountry": "USA",
      "birthState": "AL",
      "citizenship": "USA",
      "visaType": null,
      "hasLicense": "Yes",
      "driverState": "AL",
      "driverNumber": "123",
      "phonePersonal": "(111) 111-1111",
      "phoneBusiness": "(222) 222-2222",
      "occupation": "Employed",
      "duties": "Accountant",
      "dutiesOther": null,
      "employer": "ABC Company",
      "armedForces": "No",
      "salary": "12,000",
      "otherIncome": "13,000",
      "netWorth": "14,000",
      "bankrupt": {
        "value": "Yes",
        "details": "Other explanation"
      },
      "purpose": {
        "name": "Income Replacement",
        "details": null
      }
    },
    "beneficiaries": [
      {
        "$$hashKey": "object:947",
        "type": "Primary",
        "firstName": "Adi2",
        "middleName": "B",
        "lastName": "Bond",
        "email": "adi@gmail.com",
        "percentage": 100,
        "relationship": "Business Partner",
        "relationshipDetails": "my relationship details",
        "dob": "01/01/1980",
        "ss": "333-33-3333",
        "phone": "4444444444",
        "address": "70-41 Olcott Street",
        "city": "Forest Hills",
        "state": {
          "code": 37,
          "name": "New York",
          "abbreviation": "NY",
          "$$hashKey": "object:340"
        },
        "zip": "11375"
      },
      {
        "$$hashKey": "object:1122",
        "type": "Secondary",
        "firstName": "Liad",
        "middleName": "B",
        "lastName": "Bond",
        "email": "adi@gmail.com",
        "percentage": 100,
        "relationship": "Child",
        "relationshipDetails": "my relationship details",
        "ss": "555-55-5555",
        "phone": "3333333333",
        "address": "70-41 Olcott Street",
        "city": "Forest Hills",
        "state": {
          "code": 32,
          "name": "Nebraska",
          "abbreviation": "NE",
          "$$hashKey": "object:335"
        },
        "zip": "11375"
      },
      {
        "$$hashKey": "object:1122",
        "type": "Secondary",
        "firstName": "Liad",
        "middleName": "B",
        "lastName": "Bond",
        "email": "adi@gmail.com",
        "percentage": 100,
        "relationship": "Child",
        "relationshipDetails": "my relationship details",
        "ss": "555-55-5555",
        "phone": "3333333333",
        "address": "70-41 Olcott Street",
        "city": "Forest Hills",
        "state": {
          "code": 32,
          "name": "Nebraska",
          "abbreviation": "NE",
          "$$hashKey": "object:335"
        },
        "zip": "11375"
      }
    ],
    "coverageFunding": {
      "otherHasRight": {
        "value": "Yes",
        "details": "details text..."
      },
      "otherHasOffered": {
        "value": "Yes",
        "details": "details text..."
      },
      "termRidersOtherDetail" : "Test fish",
      "term" : true,
      "ridersAndBenefits": {
        "tdw" : true,
        "adb" : true,
        "upr" : true,
        "other" : true
      },
      "acceleratedDeathBenefit": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:42"
        }
      ],
      "otherLife": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "reset": false,
          "terminating": true,
          "useToPay": true,
          "$$hashKey": "object:74"
        }
      ],
      "replacement": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:81"
        }
      ],
      "otherInsurance": "Yes",
      "replaceInsurance": "Yes",
      "otherInsuranceItems": [
        {
          "$$hashKey": "object:95",
          "insuranceCompany": "My Insurance",
          "insuranceStatus": "existing",
          "insuranceAmount": 200000,
          "insuranceIssueYear": 1990,
          "insurancePurpose": "personal",
          "insuranceReplace": "yes"
        }
      ],
      "secondaryAddressee": {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:97",
          "firstName": "John",
          "middleName": "P",
          "lastName": "Smith",
          "address": "70-41 Olcott Street",
          "city": "Forest Hills",
          "state": {
            "code": 32,
            "name": "Nebraska",
            "abbreviation": "NE",
            "$$hashKey": "object:290"
          },
          "zip": "11375",
          "birth": "01/01/1980"
      },
      "amount": 500000,
      "type_x": "SmartProtect",
      "period": "10",
      "backupWithholding": false,
      "otherBeneficiary": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "reset": false
        }
      ]
    },
    "personal": {
      "otherMedicalProfessionals": "Other medical text...",
      "medicalGroupOrganization": "Test organization",
      "healthInsuranceProvider": "Test text",
      "dentistHygenistVisit": "Yes",
      "hasPrimaryPhysician": true,
      "involuntaryWeight": [
        {
          "name": "Yes (Gained)",
          "id": 1,
          "selected": true,
          "$$hashKey": "object:455",
          "gained": 12,
          "lost": 12
        }
      ],
      "triedLosingWeight": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": null,
          "gained": 12,
          "lost": 12,
          "$$hashKey": "object:465"
        }
      ],
      "knowPressureReading": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": null,
          "$$hashKey": "object:472"
        }
      ],
      "knowCholesterolReading": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": null,
          "$$hashKey": "object:479"
        }
      ],
      "hasSiblings": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": null,
          "$$hashKey": "object:506"
        }
      ],
      "fatherKnowMedical": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": null,
          "$$hashKey": "object:486"
        }
      ],
      "fatherConditions": [
        {
          "name": "Alzheimers",
          "id": 1,
          "selected": true,
          "ageOnset": 44,
          "details": true,
          "isCancer": false,
          "reset": false,
          "$$hashKey": "object:840"
        },
        {
          "name": "Cancer",
          "id": 2,
          "selected": true,
          "ageOnset": 42,
          "details": true,
          "isCancer": true,
          "reset": false,
          "$$hashKey": "object:841",
          "CancerType": "Bone Sarcoma"
        }
      ],
      "motherKnowMedical": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": null,
          "$$hashKey": "object:496"
        }
      ],
      "motherConditions": [
        {
          "name": "Coronary Artery Disease",
          "id": 3,
          "selected": true,
          "ageOnset": 32,
          "details": true,
          "isCancer": false,
          "reset": false,
          "$$hashKey": "object:954"
        }
      ],
      "siblings": [
        {
          "control": {
            "conditions": [
              {
                "name": "Alzheimers",
                "id": 1,
                "selected": false,
                "ageOnset": null,
                "details": true,
                "isCancer": false,
                "reset": false,
                "$$hashKey": "object:1069"
              },
              {
                "name": "Cancer",
                "id": 2,
                "selected": false,
                "ageOnset": null,
                "details": true,
                "isCancer": true,
                "reset": false,
                "$$hashKey": "object:1070"
              },
              {
                "name": "Coronary Artery Disease",
                "id": 3,
                "selected": false,
                "ageOnset": null,
                "details": true,
                "isCancer": false,
                "reset": false,
                "$$hashKey": "object:1071"
              },
              {
                "name": "Diabetes",
                "id": 4,
                "selected": false,
                "ageOnset": null,
                "details": true,
                "isCancer": false,
                "reset": false,
                "$$hashKey": "object:1072"
              },
              {
                "name": "Huntington\'s",
                "id": 5,
                "selected": false,
                "ageOnset": null,
                "details": true,
                "isCancer": false,
                "reset": false,
                "$$hashKey": "object:1073"
              },
              {
                "name": "Polycystic Kidney Disease",
                "id": 6,
                "selected": false,
                "ageOnset": null,
                "details": true,
                "isCancer": false,
                "reset": false,
                "$$hashKey": "object:1074"
              },
              {
                "name": "Stroke",
                "id": 7,
                "selected": true,
                "ageOnset": 21,
                "details": true,
                "isCancer": false,
                "reset": false,
                "$$hashKey": "object:1075"
              },
              {
                "name": "Check if Unknown",
                "id": 8,
                "selected": false,
                "ageOnset": null,
                "details": false,
                "isCancer": false,
                "reset": true,
                "$$hashKey": "object:1076"
              },
              {
                "name": "None of these apply",
                "id": 9,
                "selected": false,
                "ageOnset": null,
                "details": false,
                "isCancer": false,
                "reset": true,
                "$$hashKey": "object:1077"
              }
            ],
            "knowMedical": [
              {
                "name": "Yes",
                "id": 1,
                "selected": true,
                "details": null,
                "$$hashKey": "object:1039"
              },
              {
                "name": "No",
                "id": 2,
                "selected": false,
                "details": null,
                "$$hashKey": "object:1040"
              }
            ]
          },
          "conditions": [
            {
              "name": "Stroke",
              "id": 7,
              "selected": true,
              "ageOnset": 21,
              "details": true,
              "isCancer": false,
              "reset": false,
              "$$hashKey": "object:1075"
            }
          ],
          "knowMedical": [
            {
              "name": "Yes",
              "id": 1,
              "selected": true,
              "details": null,
              "$$hashKey": "object:1039"
            }
          ],
          "$$hashKey": "object:1033",
          "gender": "Brother",
          "currentAge": 34,
          "deathCause": "Other",
          "deathCauseOther": "details go here"
        }
      ],
      "health": {
        "heightFeet": 5,
        "heightInches": 5,
        "weight": 150,
        "pressureUpper": 120,
        "pressureLower": 120,
        "cholesterolTotal": 100,
        "cholesterolRatio": 2,
        "fatherCurrentAge": 55,
        "fatherCurrentCondition": "Very healthy",
        "fatherDeathCause": "Other",
        "fatherDeathCauseOther": "details go here",
        "motherCurrentAge": 32,
        "motherCurrentCondition": "Very healthy",
        "motherDeathCause": "Cancer",
        "motherDeathCauseOther": "details go here"
      },
      "usedTobacco": true,
      "usedAlcohol": true,
      "drugsCounseling": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": "My details",
          "$$hashKey": "object:537"
        }
      ],
      "drugspositiveCocaine": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": "My details",
          "$$hashKey": "object:544"
        }
      ],
      "drugsSedatives": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": "My details",
          "$$hashKey": "object:551"
        }
      ],
      "drugsSupportGroup": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": "My details",
          "$$hashKey": "object:558"
        }
      ],
      "marijuanaUse": [
        {
          "name": "Medicinal – Provide Prescription Card ID",
          "id": 2,
          "selected": true,
          "$$hashKey": "object:521"
        }
      ],
      "marijuanaDelivery": [
        {
          "name": "Ingested",
          "id": 1,
          "selected": true,
          "$$hashKey": "object:1231"
        }
      ],
      "tobacco": [
        {
          "$$hashKey": "object:1146",
          "type_x": "E-Cigarettes",
          "quantity": 2,
          "unit": "Cigarettes",
          "frequency": "Day",
          "lastUsed": "092000"
        },
        {
          "$$hashKey": "object:1146",
          "type_x": "E-Cigarettes",
          "quantity": 4,
          "unit": "Cigarettes",
          "frequency": "Day",
          "lastUsed": "092000"
        }
      ],
      "alcoholProducts": [
        {
          "$$hashKey": "object:1292",
          "type_x": "Beer",
          "number_x": 2,
          "frequency": "Day",
          "date_x": "012000"
        }
      ],
      "physician": {
        "firstName": "James",
        "lastName": "Bond",
        "address": "70-41 Olcott Street",
        "city": "Forest Hills",
        "state": {
          "code": 32,
          "name": "Nebraska",
          "abbreviation": "NE",
          "$$hashKey": "object:290"
        },
        "zip": "11375",
        "phone": "2122222222",
        "date_x": "01/01/1980",
        "reason": "My reason"
      },
      "marijuanaLastUsed": "012000",
      "marijuanaFrequency": 2,
      "marijuanaTimes": "Day",
      "marijuanaId": "123456"
    },
    "medications": {
      "medicationCheck": true,
      "medications": [
        {
          "$$hashKey": "object:2635",
          "prescriptionName": "Medication 1",
          "condition": "Other",
          "conditionOther": "Description for other"
        },
        {
          "$$hashKey": "object:2679",
          "prescriptionName": "Medication 2",
          "condition": "Diabetes/High Blood Sugar"
        }
      ]
    },
    "medications": {
      "medicationCheck": true,
      "medications": [
        {
          "$$hashKey": "object:2635",
          "prescriptionName": "Medication 1",
          "condition": "Other",
          "conditionOther": "Description for other"
        },
        {
          "$$hashKey": "object:2679",
          "prescriptionName": "Medication 2",
          "condition": "Diabetes/High Blood Sugar"
        }
      ]
    },
    "medicalConditions": {
      "conditionsHeart": [
        {
          "name": "Arrythmia/Irregular Heart Beat",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2717"
        },
        {
          "name": "Heart Murmur/Valvular Heart Disease",
          "id": 4,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2720"
        }
      ],
      "conditionsVascular": [
        {
          "name": "Peripheral Vascular Disease",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2738"
        }
      ],
      "conditionsDiabetes": [
        {
          "name": "None of these apply to me",
          "id": 5,
          "selected": true,
          "reset": true,
          "$$hashKey": "object:2755"
        }
      ],
      "conditionsCognitive": [
        {
          "name": "Alzheimer\'s Disease/Dementia",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2767"
        },
        {
          "name": "Bipolar Disorder",
          "id": 2,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2768"
        }
      ],
      "conditionsNervous": [
        {
          "name": "Epilepsy/Seizure Disorder",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2786"
        },
        {
          "name": "Multiple Sclerosis",
          "id": 2,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2787"
        }
      ],
      "conditionsLungs": [
        {
          "name": "Chronic Obstructive Pulmonary Disease/Chronic Bronchitis/Emphysema",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2805"
        }
      ],
      "conditionsGastrointestinal": [
        {
          "name": "Cirrhosis",
          "id": 2,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2816"
        }
      ],
      "conditionsCancer": [
        {
          "name": "Cancer/Malignancy (excluding Basel Cell and Squamous Cell skin cancers)",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2834"
        }
      ],
      "conditionsOther": [
        {
          "name": "Autoimmune Disorders",
          "id": 2,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2845"
        }
      ],
      "groupA": [
        {
          "condition": "High Blood Pressure (BP)",
          "conditionOther": null,
          "id": 1,
          "selected": true,
          "reset": false,
          "physicianName": "Albert",
          "physicianAddress": "Einstein",
          "physicianPhone": "2121212121",
          "hospitalName": "Mount Sinai",
          "hospitalAddress": "70-41 Olcott Street",
          "hospitalPhone": "2121212121",
          "onSetDate": "011999",
          "duration": "12 years",
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:261"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:262"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": true,
                "$$hashKey": "object:263"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:264"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:265"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:266"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:267"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:268"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:269"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:270"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:261"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:262"
            },
            {
              "name": "Hospitalization",
              "id": 3,
              "selected": true,
              "$$hashKey": "object:263"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "High Blood Pressure",
          "conditionOptions": [
            "High Blood Pressure (BP)",
            "Other"
          ],
          "$$hashKey": "object:117"
        },
        {
          "condition": "High Cholesterol",
          "conditionOther": null,
          "id": 2,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:422"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:423"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": true,
                "$$hashKey": "object:424"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:425"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:426"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:427"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:428"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:429"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:430"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:431"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:422"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:423"
            },
            {
              "name": "Hospitalization",
              "id": 3,
              "selected": true,
              "$$hashKey": "object:424"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "High Cholesterol",
          "conditionOptions": [
            "High Cholesterol",
            "High Triglycerides",
            "Other"
          ],
          "$$hashKey": "object:118"
        },
        {
          "condition": "Hashimoto\'s thyroiditis",
          "conditionOther": null,
          "id": 3,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:572"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:573"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": true,
                "$$hashKey": "object:574"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:575"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:576"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:577"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:578"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:579"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:580"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:581"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:572"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:573"
            },
            {
              "name": "Hospitalization",
              "id": 3,
              "selected": true,
              "$$hashKey": "object:574"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Disorders of the Thyroid or Other Glands",
          "conditionOptions": [
            "Grave\'s Disease",
            "Hashimoto\'s thyroiditis",
            "Hyperthyroidism",
            "Hypothyroidism",
            "Thyroid Nodules",
            "Other"
          ],
          "$$hashKey": "object:119"
        },
        {
          "condition": "Allergic asthma",
          "conditionOther": null,
          "id": 4,
          "selected": true,
          "reset": false,
          "physicianName": "Albert",
          "physicianAddress": "Einstein",
          "physicianPhone": "2121212122",
          "hospitalName": "Mount Sinai",
          "hospitalAddress": "1 Park Avenu",
          "hospitalPhone": "2121212121",
          "onSetDate": "011980",
          "duration": "1 year",
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:722"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:723"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:724"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:725"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:726"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:727"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:728"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:729"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:730"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": true,
                "$$hashKey": "object:731"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:722"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:723"
            },
            {
              "name": "Other",
              "id": 10,
              "selected": true,
              "$$hashKey": "object:731"
            }
          ],
          "treatmentOther": "Other",
          "hasOptions": true,
          "name": "Asthma",
          "conditionOptions": [
            "Allergic asthma",
            "Asthma",
            "Exercise induced asthma",
            "Reactive Airways",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:120",
          "lastOccurrence": "011980",
          "frequency": "Daily",
          "steroidsTaken": true,
          "steroidsTakenDate": "011999",
          "hospitalized": true,
          "hospitalizedDate": "022000",
          "missedWork": "Yes",
          "missedWorkDetails": "details..."
        },
        {
          "condition": "Obstructive Sleep Apnea (OSA)",
          "conditionOther": null,
          "id": 5,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:905"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:906"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:907"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:908"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:909"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:910"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:911"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:912"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:913"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:914"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:905"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:906"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Sleep Apnea",
          "conditionOptions": [
            "Obstructive Sleep Apnea (OSA)",
            "Sleep Apnea",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:121",
          "sleepStudy": true,
          "sleepStudyDate": "121980",
          "diagnosedAs": "Mild",
          "treatmentPrescribed": "CPAP/Bipap",
          "treatmentPrescribedCPAP": true,
          "treatmentPrescribedOtherDetails": "other explanation"
        },
        {
          "condition": "Anxiety",
          "conditionOther": null,
          "id": 6,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:1069"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:1070"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:1071"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:1072"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:1073"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:1074"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:1075"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:1076"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:1077"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:1078"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:1069"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:1070"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Anxiety",
          "conditionOptions": [
            "Anxiety",
            "Obsessive Compulsive Disorder (OCD)",
            "Panic Attack/Disorder",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:122",
          "primaryPhysicianCheck": false,
          "specificDiagnosis": "my diagnosis",
          "otherMental": "Yes",
          "otherMentalDetails": "details",
          "treatmentAdditional": "Medication",
          "treatmentAdditionalDetails": "other details",
          "hospitalTreatment": "Yes",
          "hospitalTreatmentDate": "011980",
          "symptomsFrequency": "Daily",
          "restrictedActivities": "Yes"
        },
        {
          "condition": "Depression",
          "conditionOther": null,
          "id": 7,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:1249"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:1250"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:1251"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:1252"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:1253"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:1254"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:1255"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:1256"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:1257"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:1258"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:1249"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:1250"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Mild Depression",
          "conditionOptions": [
            "Depression",
            "Postpartum Depression",
            "Seasonal Affective Disorder (SAD)",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:123",
          "specificDiagnosis": "my diagnosis",
          "treatmentAdditional": "Medication",
          "treatmentAdditionalDetails": "other details",
          "hospitalTreatment": "Yes",
          "hospitalTreatmentDate": "121980",
          "disorderTreatment": "Yes",
          "restrictedActivities": "Yes"
        }
      ],
      "groupB": [
        {
          "condition": "Degenerative Arthritis",
          "conditionOther": null,
          "id": 1,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:1555"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:1556"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:1557"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:1558"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:1559"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:1560"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:1561"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:1562"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:1563"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:1564"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:1555"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:1556"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Osteoarthritis",
          "conditionOptions": [
            "Degenerative Arthritis",
            "Degenerative Joint Disease (DJD)",
            "Osteoarthritis",
            "Other"
          ],
          "$$hashKey": "object:133"
        },
        {
          "condition": "Osteopenia",
          "conditionOther": null,
          "id": 2,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:1714"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:1715"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:1716"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:1717"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:1718"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:1719"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:1720"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:1721"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:1722"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:1723"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:1714"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:1715"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Osteoporosis",
          "conditionOptions": [
            "Osteopenia",
            "Osteoporosis",
            "Other"
          ],
          "$$hashKey": "object:134"
        },
        {
          "condition": "Ankylosing Spondylitis",
          "conditionOther": null,
          "id": 3,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:1864"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:1865"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:1866"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:1867"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:1868"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:1869"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:1870"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:1871"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:1872"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:1873"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:1864"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:1865"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Other Bone, Joint or Muscle Disorders",
          "conditionOptions": [
            "Ankylosing Spondylitis",
            "Bursitis",
            "Chronic Fatigue",
            "Gout",
            "Herniated Disc",
            "Joint Replacement",
            "Sciatica",
            "Tendonitis",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:135",
          "specificDiagnosis": "my diagnosis",
          "steroids": "Yes",
          "steroidsDate": "011980",
          "severity": "Mild",
          "surgery": "Yes",
          "surgeryType": "type is...",
          "surgeryDate": "011980",
          "useAids": "Yes",
          "useAidsType": "Single Prong Cane",
          "useAidsTypeOther": "other details",
          "missedWork": "Yes",
          "missedWorkDate": "011980"
        }
      ],
      "groupC": [
        {
          "condition": "Adenoma",
          "conditionOther": null,
          "id": 1,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:2118"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:2119"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:2120"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:2121"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:2122"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:2123"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:2124"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:2125"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:2126"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:2127"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:2118"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:2119"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Benign Tumor",
          "conditionOptions": [
            "Acoustic Neuroma",
            "Adenoma",
            "Colon Polyp",
            "Breast Cyst",
            "Benign Cyst",
            "Meningioma",
            "Pre-cancerous Lesion",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:141",
          "areaAffected": "yes details",
          "treatmentAdditional": "Medication",
          "treatmentAdditionalDate": "011980",
          "treatmentAdditionalDetails": "treatment other details",
          "conditionResolved": "Yes",
          "conditionResolvedDate": "011980",
          "malignant": "Yes",
          "surveillance": "Yes",
          "surveillanceType": "Other",
          "surveillanceTypeOther": "Other details"
        },
        {
          "condition": "Crohn\'s Disease",
          "conditionOther": null,
          "id": 2,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:2304"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:2305"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:2306"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:2307"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:2308"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:2309"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:2310"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:2311"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:2312"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:2313"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:2304"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:2305"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Crohn\'s/Ulcerative Colitis",
          "conditionOptions": [
            "Crohn\'s Disease",
            "Proctitis",
            "Ulcerative Colitis",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:142",
          "treatmentAdditional": "Medication",
          "treatmentAdditionalDetails": "other details",
          "symptomsDate": "011980",
          "hadSurgery": "Yes",
          "hadSurgeryType": "Colon Resection",
          "hadSurgeryTypeDetails": "surgery details",
          "hadSurgeryDate": "011980",
          "hasComplications": "Yes",
          "hasComplicationsDetails": "details...",
          "emergencyRoom": "None",
          "disability": "Yes"
        },
        {
          "condition": "B12 Deficiency",
          "conditionOther": null,
          "id": 3,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:2486"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:2487"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:2488"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:2489"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:2490"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:2491"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:2492"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:2493"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:2494"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:2495"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:2486"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:2487"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Mild Iron Deficiency Anemia",
          "conditionOptions": [
            "B12 Deficiency",
            "Low iron/Iron Deficiency",
            "Other"
          ],
          "$$hashKey": "object:143"
        }
      ]
    },
    "medicalDiagnosticTesting": {
  "testPerformedCheck": "Yes",
  "testPendingCheck": "Yes",
  "otherInjuryCheck": "Yes",
  "testPerformed": [
    {
      "type_x": "Blood Test",
      "result": "Normal",
      "details": null
    }
  ],
  "testPending": {
    "bun": true,
    "car": true,
    "cat": true,
    "cts": true,
    "eye": true,
    "hem": true,
    "her": true,
    "men": true,
    "nas": true,
    "rot": true,
    "rou": true,
    "ult": true,
    "var": true,
    "vas": true,
    "other": true
  },
  "testPendingDetails": "123",
  "otherInjury": [
    {
      "type_x": "Acid Reflux/Indigestion/GERD/Heartburn",
      "details": null
    }
  ],
  "hasAids": "Yes",
  "hasAidsDetails": "123"
},
    "lifestyle": {
      "sports": [
        {
          "name": "Walking",
          "id": 1,
          "selected": true,
          "reset": false,
          "hasOptions": true,
          "hasDetails": false,
          "$$hashKey": "object:3859",
          "frequency": "Daily",
          "hours": "2",
          "minutes": "2"
        },
        {
          "name": "Running",
          "id": 2,
          "selected": true,
          "reset": false,
          "hasOptions": true,
          "hasDetails": false,
          "$$hashKey": "object:3860",
          "frequency": "Daily",
          "hours": "3",
          "minutes": "1"
        }
      ],
      "activites": [
        {
          "name": "Motorcycle racing",
          "id": 1,
          "reset": false,
          "selected": true,
          "$$hashKey": "object:3906"
        },
        {
          "name": "Scuba diving",
          "id": 2,
          "reset": false,
          "selected": true,
          "$$hashKey": "object:3907"
        }
      ],
      "divingTypes": [
        {
          "name": "Recreation",
          "id": 1,
          "selected": true,
          "$$hashKey": "object:4135"
        }
      ],
      "divingDepths": [
        {
          "name": "<30",
          "id": 1,
          "selected": true,
          "number24Months": "1",
          "averageTime24Months": "12",
          "averageTime12Months": "12",
          "number12Months": "2"
        },
        {
          "name": "31-65",
          "id": 2,
          "selected": true,
          "number24Months": "3",
          "number12Months": "4",
          "averageTime24Months": "15",
          "averageTime12Months": "17"
        }
      ],
      "divingOther": [
        {
          "name": "No",
          "id": 2,
          "selected": true,
          "details": "here details...",
          "$$hashKey": "object:4161"
        }
      ],
      "divingAlone": [
        {
          "name": "No",
          "id": 2,
          "selected": true,
          "details": "here details...",
          "$$hashKey": "object:4168"
        }
      ],
      "divingCertified": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "$$hashKey": "object:4174",
          "level": "Master",
          "organization": "ABC"
        }
      ],
      "driving": [
        {
          "name": "Cited for more than 1 violation",
          "id": 1,
          "reset": false,
          "selected": true,
          "$$hashKey": "object:3937"
        }
      ],
      "travelAbroad": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "$$hashKey": "object:3892"
        }
      ],
      "destinations": [
        {
          "$$hashKey": "object:4069",
          "name": "Thailand",
          "purpose": "Business",
          "frequency": "Only Once",
          "duration": "1-7 days"
        }
      ],
      "pilot": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "$$hashKey": "object:3899"
        }
      ],
      "divingTypesDetails": "My details",
      "previouslyDenied": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "reason": "my details..."
        }
      ]
    },
    "payment": {
      "paying": [
        {
          "name": "Self",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:49"
        }
      ],
      "bankName": "ABC Bank",
      "accountType": "savings",
      "accountNumber": "12345",
      "routingNumber": "123456"
    },
    
  }
';
    }

    public static function get()
    {
        return '  {
    "insured": {
      "firstName": "James",
      "middleName": "R",
      "lastName": "Bond",
      "email": "bond@usa.com",
      "emailConfirm": "bond@usa.com",
      "gender": "Male",
      "ss": "111-22-3333",
      "address": "70-41 Olcott Street",
      "city": "Forest Hills",
      "state": "NY",
      "zip": "11375",
      "dob": "01/01/1980",
      "birthCountry": "USA",
      "birthState": "AL",
      "citizenship": "USA",
      "visaType": null,
      "hasLicense": "Yes",
      "driverState": "AL",
      "driverNumber": "123",
      "phonePersonal": "(111) 111-1111",
      "phoneBusiness": "(222) 222-2222",
      "occupation": "Employed",
      "duties": "Accountant",
      "dutiesOther": null,
      "employer": "ABC Company",
      "armedForces": "No",
      "salary": "12,000",
      "otherIncome": "13,000",
      "netWorth": "14,000",
      "bankrupt": {
        "value": "Yes",
        "details": "Other explanation"
      },
      "purpose": {
        "name": "Income Replacement",
        "details": null
      }
    },
    "beneficiaries": [
      {
        "$$hashKey": "object:947",
        "type": "Primary",
        "firstName": "Adi2",
        "middleName": "B",
        "lastName": "Bond",
        "email": "adi@gmail.com",
        "percentage": 100,
        "relationship": "Business Partner",
        "relationshipDetails": "my relationship details",
        "dob": "01/01/1980",
        "ss": "333-33-3333",
        "phone": "4444444444",
        "address": "70-41 Olcott Street",
        "city": "Forest Hills",
        "state": {
          "code": 37,
          "name": "New York",
          "abbreviation": "NY",
          "$$hashKey": "object:340"
        },
        "zip": "11375"
      },
      {
        "$$hashKey": "object:1122",
        "type": "Secondary",
        "firstName": "Liad",
        "middleName": "B",
        "lastName": "Bond",
        "email": "adi@gmail.com",
        "percentage": 100,
        "relationship": "Child",
        "relationshipDetails": "my relationship details",
        "ss": "555-55-5555",
        "phone": "3333333333",
        "address": "70-41 Olcott Street",
        "city": "Forest Hills",
        "state": {
          "code": 32,
          "name": "Nebraska",
          "abbreviation": "NE",
          "$$hashKey": "object:335"
        },
        "zip": "11375"
      },
      {
        "$$hashKey": "object:1122",
        "type": "Secondary",
        "firstName": "Liad",
        "middleName": "B",
        "lastName": "Bond",
        "email": "adi@gmail.com",
        "percentage": 100,
        "relationship": "Child",
        "relationshipDetails": "my relationship details",
        "ss": "555-55-5555",
        "phone": "3333333333",
        "address": "70-41 Olcott Street",
        "city": "Forest Hills",
        "state": {
          "code": 32,
          "name": "Nebraska",
          "abbreviation": "NE",
          "$$hashKey": "object:335"
        },
        "zip": "11375"
      }
    ],
    "coverageFunding": {
      "otherHasRight": {
        "value": "Yes",
        "details": "details text..."
      },
      "otherHasOffered": {
        "value": "Yes",
        "details": "details text..."
      },
      "termRidersOtherDetail" : "Test fish",
      "term" : true,
      "ridersAndBenefits": {
        "tdw" : true,
        "adb" : true,
        "upr" : true,
        "other" : true
      },
      "acceleratedDeathBenefit": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:42"
        }
      ],
      "otherLife": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "reset": false,
          "terminating": true,
          "useToPay": true,
          "$$hashKey": "object:74"
        }
      ],
      "replacement": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:81"
        }
      ],
      "otherInsurance": "Yes",
      "replaceInsurance": "Yes",
      "otherInsuranceItems": [
        {
          "$$hashKey": "object:95",
          "insuranceCompany": "My Insurance",
          "insuranceStatus": "existing",
          "insuranceAmount": 200000,
          "insuranceIssueYear": 1990,
          "insurancePurpose": "personal",
          "insuranceReplace": "yes"
        }
      ],
      "secondaryAddressee": {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:97",
          "firstName": "John",
          "middleName": "P",
          "lastName": "Smith",
          "address": "70-41 Olcott Street",
          "city": "Forest Hills",
          "state": {
            "code": 32,
            "name": "Nebraska",
            "abbreviation": "NE",
            "$$hashKey": "object:290"
          },
          "zip": "11375",
          "birth": "01/01/1980"
      },
      "amount": 500000,
      "type_x": "SmartProtect",
      "period": "10",
      "backupWithholding": false,
      "otherBeneficiary": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "reset": false
        }
      ]
    },
    "personal": {
      "otherMedicalProfessionals": "Other medical text...",
      "medicalGroupOrganization": "Test organization",
      "healthInsuranceProvider": "Test text",
      "dentistHygenistVisit": "Yes",
      "hasPrimaryPhysician": true,
      "involuntaryWeight": [
        {
          "name": "Yes (Gained)",
          "id": 1,
          "selected": true,
          "$$hashKey": "object:455",
          "gained": 12,
          "lost": 12
        }
      ],
      "triedLosingWeight": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": null,
          "gained": 12,
          "lost": 12,
          "$$hashKey": "object:465"
        }
      ],
      "knowPressureReading": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": null,
          "$$hashKey": "object:472"
        }
      ],
      "knowCholesterolReading": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": null,
          "$$hashKey": "object:479"
        }
      ],
      "hasSiblings": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": null,
          "$$hashKey": "object:506"
        }
      ],
      "fatherKnowMedical": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": null,
          "$$hashKey": "object:486"
        }
      ],
      "fatherConditions": [
        {
          "name": "Alzheimers",
          "id": 1,
          "selected": true,
          "ageOnset": 44,
          "details": true,
          "isCancer": false,
          "reset": false,
          "$$hashKey": "object:840"
        },
        {
          "name": "Cancer",
          "id": 2,
          "selected": true,
          "ageOnset": 42,
          "details": true,
          "isCancer": true,
          "reset": false,
          "$$hashKey": "object:841",
          "CancerType": "Bone Sarcoma"
        }
      ],
      "motherKnowMedical": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": null,
          "$$hashKey": "object:496"
        }
      ],
      "motherConditions": [
        {
          "name": "Coronary Artery Disease",
          "id": 3,
          "selected": true,
          "ageOnset": 32,
          "details": true,
          "isCancer": false,
          "reset": false,
          "$$hashKey": "object:954"
        }
      ],
      "siblings": [
        {
          "control": {
            "conditions": [
              {
                "name": "Alzheimers",
                "id": 1,
                "selected": false,
                "ageOnset": null,
                "details": true,
                "isCancer": false,
                "reset": false,
                "$$hashKey": "object:1069"
              },
              {
                "name": "Cancer",
                "id": 2,
                "selected": false,
                "ageOnset": null,
                "details": true,
                "isCancer": true,
                "reset": false,
                "$$hashKey": "object:1070"
              },
              {
                "name": "Coronary Artery Disease",
                "id": 3,
                "selected": false,
                "ageOnset": null,
                "details": true,
                "isCancer": false,
                "reset": false,
                "$$hashKey": "object:1071"
              },
              {
                "name": "Diabetes",
                "id": 4,
                "selected": false,
                "ageOnset": null,
                "details": true,
                "isCancer": false,
                "reset": false,
                "$$hashKey": "object:1072"
              },
              {
                "name": "Huntington\'s",
                "id": 5,
                "selected": false,
                "ageOnset": null,
                "details": true,
                "isCancer": false,
                "reset": false,
                "$$hashKey": "object:1073"
              },
              {
                "name": "Polycystic Kidney Disease",
                "id": 6,
                "selected": false,
                "ageOnset": null,
                "details": true,
                "isCancer": false,
                "reset": false,
                "$$hashKey": "object:1074"
              },
              {
                "name": "Stroke",
                "id": 7,
                "selected": true,
                "ageOnset": 21,
                "details": true,
                "isCancer": false,
                "reset": false,
                "$$hashKey": "object:1075"
              },
              {
                "name": "Check if Unknown",
                "id": 8,
                "selected": false,
                "ageOnset": null,
                "details": false,
                "isCancer": false,
                "reset": true,
                "$$hashKey": "object:1076"
              },
              {
                "name": "None of these apply",
                "id": 9,
                "selected": false,
                "ageOnset": null,
                "details": false,
                "isCancer": false,
                "reset": true,
                "$$hashKey": "object:1077"
              }
            ],
            "knowMedical": [
              {
                "name": "Yes",
                "id": 1,
                "selected": true,
                "details": null,
                "$$hashKey": "object:1039"
              },
              {
                "name": "No",
                "id": 2,
                "selected": false,
                "details": null,
                "$$hashKey": "object:1040"
              }
            ]
          },
          "conditions": [
            {
              "name": "Stroke",
              "id": 7,
              "selected": true,
              "ageOnset": 21,
              "details": true,
              "isCancer": false,
              "reset": false,
              "$$hashKey": "object:1075"
            }
          ],
          "knowMedical": [
            {
              "name": "Yes",
              "id": 1,
              "selected": true,
              "details": null,
              "$$hashKey": "object:1039"
            }
          ],
          "$$hashKey": "object:1033",
          "gender": "Brother",
          "currentAge": 34,
          "deathCause": "Other",
          "deathCauseOther": "details go here"
        }
      ],
      "health": {
        "heightFeet": 5,
        "heightInches": 5,
        "weight": 150,
        "pressureUpper": 120,
        "pressureLower": 120,
        "cholesterolTotal": 100,
        "cholesterolRatio": 2,
        "fatherCurrentAge": 55,
        "fatherCurrentCondition": "Very healthy",
        "fatherDeathCause": "Other",
        "fatherDeathCauseOther": "details go here",
        "motherCurrentAge": 32,
        "motherCurrentCondition": "Very healthy",
        "motherDeathCause": "Cancer",
        "motherDeathCauseOther": "details go here"
      },
      "usedTobacco": true,
      "usedAlcohol": true,
      "drugsCounseling": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": "My details",
          "$$hashKey": "object:537"
        }
      ],
      "drugspositiveCocaine": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": "My details",
          "$$hashKey": "object:544"
        }
      ],
      "drugsSedatives": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": "My details",
          "$$hashKey": "object:551"
        }
      ],
      "drugsSupportGroup": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "details": "My details",
          "$$hashKey": "object:558"
        }
      ],
      "marijuanaUse": [
        {
          "name": "Medicinal – Provide Prescription Card ID",
          "id": 2,
          "selected": true,
          "$$hashKey": "object:521"
        }
      ],
      "marijuanaDelivery": [
        {
          "name": "Ingested",
          "id": 1,
          "selected": true,
          "$$hashKey": "object:1231"
        }
      ],
      "tobacco": [
        {
          "$$hashKey": "object:1146",
          "type_x": "E-Cigarettes",
          "quantity": 2,
          "unit": "Cigarettes",
          "frequency": "Day",
          "lastUsed": "092000"
        },
        {
          "$$hashKey": "object:1146",
          "type_x": "E-Cigarettes",
          "quantity": 4,
          "unit": "Cigarettes",
          "frequency": "Day",
          "lastUsed": "092000"
        }
      ],
      "alcoholProducts": [
        {
          "$$hashKey": "object:1292",
          "type_x": "Beer",
          "number_x": 2,
          "frequency": "Day",
          "date_x": "012000"
        }
      ],
      "physician": {
        "firstName": "James",
        "lastName": "Bond",
        "address": "70-41 Olcott Street",
        "city": "Forest Hills",
        "state": {
          "code": 32,
          "name": "Nebraska",
          "abbreviation": "NE",
          "$$hashKey": "object:290"
        },
        "zip": "11375",
        "phone": "2122222222",
        "date_x": "01/01/1980",
        "reason": "My reason"
      },
      "marijuanaLastUsed": "012000",
      "marijuanaFrequency": 2,
      "marijuanaTimes": "Day",
      "marijuanaId": "123456"
    },
    "medications": {
      "medicationCheck": true,
      "medications": [
        {
          "$$hashKey": "object:2635",
          "prescriptionName": "Medication 1",
          "condition": "Other",
          "conditionOther": "Description for other"
        },
        {
          "$$hashKey": "object:2679",
          "prescriptionName": "Medication 2",
          "condition": "Diabetes/High Blood Sugar"
        }
      ]
    },
    "medicalConditions": {
      "conditionsHeart": [
        {
          "name": "Arrythmia/Irregular Heart Beat",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2717"
        },
        {
          "name": "Heart Murmur/Valvular Heart Disease",
          "id": 4,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2720"
        }
      ],
      "conditionsVascular": [
        {
          "name": "Peripheral Vascular Disease",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2738"
        }
      ],
      "conditionsDiabetes": [
        {
          "name": "None of these apply to me",
          "id": 5,
          "selected": true,
          "reset": true,
          "$$hashKey": "object:2755"
        }
      ],
      "conditionsCognitive": [
        {
          "name": "Alzheimer\'s Disease/Dementia",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2767"
        },
        {
          "name": "Bipolar Disorder",
          "id": 2,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2768"
        }
      ],
      "conditionsNervous": [
        {
          "name": "Epilepsy/Seizure Disorder",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2786"
        },
        {
          "name": "Multiple Sclerosis",
          "id": 2,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2787"
        }
      ],
      "conditionsLungs": [
        {
          "name": "Chronic Obstructive Pulmonary Disease/Chronic Bronchitis/Emphysema",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2805"
        }
      ],
      "conditionsGastrointestinal": [
        {
          "name": "Cirrhosis",
          "id": 2,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2816"
        }
      ],
      "conditionsCancer": [
        {
          "name": "Cancer/Malignancy (excluding Basel Cell and Squamous Cell skin cancers)",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2834"
        }
      ],
      "conditionsOther": [
        {
          "name": "Autoimmune Disorders",
          "id": 2,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:2845"
        }
      ],
      "groupA": [
        {
          "condition": "High Blood Pressure (BP)",
          "conditionOther": null,
          "id": 1,
          "selected": true,
          "reset": false,
          "physicianName": "Albert",
          "physicianAddress": "Einstein",
          "physicianPhone": "2121212121",
          "hospitalName": "Mount Sinai",
          "hospitalAddress": "70-41 Olcott Street",
          "hospitalPhone": "2121212121",
          "onSetDate": "011999",
          "duration": "12 years",
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:261"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:262"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": true,
                "$$hashKey": "object:263"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:264"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:265"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:266"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:267"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:268"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:269"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:270"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:261"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:262"
            },
            {
              "name": "Hospitalization",
              "id": 3,
              "selected": true,
              "$$hashKey": "object:263"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "High Blood Pressure",
          "conditionOptions": [
            "High Blood Pressure (BP)",
            "Other"
          ],
          "$$hashKey": "object:117"
        },
        {
          "condition": "High Cholesterol",
          "conditionOther": null,
          "id": 2,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:422"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:423"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": true,
                "$$hashKey": "object:424"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:425"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:426"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:427"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:428"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:429"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:430"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:431"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:422"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:423"
            },
            {
              "name": "Hospitalization",
              "id": 3,
              "selected": true,
              "$$hashKey": "object:424"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "High Cholesterol",
          "conditionOptions": [
            "High Cholesterol",
            "High Triglycerides",
            "Other"
          ],
          "$$hashKey": "object:118"
        },
        {
          "condition": "Hashimoto\'s thyroiditis",
          "conditionOther": null,
          "id": 3,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:572"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:573"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": true,
                "$$hashKey": "object:574"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:575"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:576"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:577"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:578"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:579"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:580"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:581"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:572"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:573"
            },
            {
              "name": "Hospitalization",
              "id": 3,
              "selected": true,
              "$$hashKey": "object:574"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Disorders of the Thyroid or Other Glands",
          "conditionOptions": [
            "Grave\'s Disease",
            "Hashimoto\'s thyroiditis",
            "Hyperthyroidism",
            "Hypothyroidism",
            "Thyroid Nodules",
            "Other"
          ],
          "$$hashKey": "object:119"
        },
        {
          "condition": "Allergic asthma",
          "conditionOther": null,
          "id": 4,
          "selected": true,
          "reset": false,
          "physicianName": "Albert",
          "physicianAddress": "Einstein",
          "physicianPhone": "2121212122",
          "hospitalName": "Mount Sinai",
          "hospitalAddress": "1 Park Avenu",
          "hospitalPhone": "2121212121",
          "onSetDate": "011980",
          "duration": "1 year",
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:722"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:723"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:724"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:725"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:726"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:727"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:728"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:729"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:730"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": true,
                "$$hashKey": "object:731"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:722"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:723"
            },
            {
              "name": "Other",
              "id": 10,
              "selected": true,
              "$$hashKey": "object:731"
            }
          ],
          "treatmentOther": "Other",
          "hasOptions": true,
          "name": "Asthma",
          "conditionOptions": [
            "Allergic asthma",
            "Asthma",
            "Exercise induced asthma",
            "Reactive Airways",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:120",
          "lastOccurrence": "011980",
          "frequency": "Daily",
          "steroidsTaken": true,
          "steroidsTakenDate": "011999",
          "hospitalized": true,
          "hospitalizedDate": "022000",
          "missedWork": "Yes",
          "missedWorkDetails": "details..."
        },
        {
          "condition": "Obstructive Sleep Apnea (OSA)",
          "conditionOther": null,
          "id": 5,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:905"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:906"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:907"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:908"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:909"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:910"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:911"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:912"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:913"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:914"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:905"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:906"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Sleep Apnea",
          "conditionOptions": [
            "Obstructive Sleep Apnea (OSA)",
            "Sleep Apnea",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:121",
          "sleepStudy": true,
          "sleepStudyDate": "121980",
          "diagnosedAs": "Mild",
          "treatmentPrescribed": "CPAP/Bipap",
          "treatmentPrescribedCPAP": true,
          "treatmentPrescribedOtherDetails": "other explanation"
        },
        {
          "condition": "Anxiety",
          "conditionOther": null,
          "id": 6,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:1069"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:1070"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:1071"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:1072"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:1073"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:1074"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:1075"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:1076"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:1077"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:1078"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:1069"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:1070"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Anxiety",
          "conditionOptions": [
            "Anxiety",
            "Obsessive Compulsive Disorder (OCD)",
            "Panic Attack/Disorder",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:122",
          "primaryPhysicianCheck": false,
          "specificDiagnosis": "my diagnosis",
          "otherMental": "Yes",
          "otherMentalDetails": "details",
          "treatmentAdditional": "Medication",
          "treatmentAdditionalDetails": "other details",
          "hospitalTreatment": "Yes",
          "hospitalTreatmentDate": "011980",
          "symptomsFrequency": "Daily",
          "restrictedActivities": "Yes"
        },
        {
          "condition": "Depression",
          "conditionOther": null,
          "id": 7,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:1249"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:1250"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:1251"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:1252"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:1253"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:1254"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:1255"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:1256"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:1257"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:1258"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:1249"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:1250"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Mild Depression",
          "conditionOptions": [
            "Depression",
            "Postpartum Depression",
            "Seasonal Affective Disorder (SAD)",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:123",
          "specificDiagnosis": "my diagnosis",
          "treatmentAdditional": "Medication",
          "treatmentAdditionalDetails": "other details",
          "hospitalTreatment": "Yes",
          "hospitalTreatmentDate": "121980",
          "disorderTreatment": "Yes",
          "restrictedActivities": "Yes"
        }
      ],
      "groupB": [
        {
          "condition": "Degenerative Arthritis",
          "conditionOther": null,
          "id": 1,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:1555"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:1556"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:1557"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:1558"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:1559"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:1560"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:1561"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:1562"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:1563"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:1564"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:1555"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:1556"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Osteoarthritis",
          "conditionOptions": [
            "Degenerative Arthritis",
            "Degenerative Joint Disease (DJD)",
            "Osteoarthritis",
            "Other"
          ],
          "$$hashKey": "object:133"
        },
        {
          "condition": "Osteopenia",
          "conditionOther": null,
          "id": 2,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:1714"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:1715"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:1716"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:1717"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:1718"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:1719"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:1720"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:1721"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:1722"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:1723"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:1714"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:1715"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Osteoporosis",
          "conditionOptions": [
            "Osteopenia",
            "Osteoporosis",
            "Other"
          ],
          "$$hashKey": "object:134"
        },
        {
          "condition": "Ankylosing Spondylitis",
          "conditionOther": null,
          "id": 3,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:1864"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:1865"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:1866"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:1867"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:1868"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:1869"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:1870"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:1871"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:1872"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:1873"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:1864"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:1865"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Other Bone, Joint or Muscle Disorders",
          "conditionOptions": [
            "Ankylosing Spondylitis",
            "Bursitis",
            "Chronic Fatigue",
            "Gout",
            "Herniated Disc",
            "Joint Replacement",
            "Sciatica",
            "Tendonitis",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:135",
          "specificDiagnosis": "my diagnosis",
          "steroids": "Yes",
          "steroidsDate": "011980",
          "severity": "Mild",
          "surgery": "Yes",
          "surgeryType": "type is...",
          "surgeryDate": "011980",
          "useAids": "Yes",
          "useAidsType": "Single Prong Cane",
          "useAidsTypeOther": "other details",
          "missedWork": "Yes",
          "missedWorkDate": "011980"
        }
      ],
      "groupC": [
        {
          "condition": "Adenoma",
          "conditionOther": null,
          "id": 1,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:2118"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:2119"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:2120"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:2121"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:2122"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:2123"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:2124"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:2125"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:2126"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:2127"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:2118"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:2119"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Benign Tumor",
          "conditionOptions": [
            "Acoustic Neuroma",
            "Adenoma",
            "Colon Polyp",
            "Breast Cyst",
            "Benign Cyst",
            "Meningioma",
            "Pre-cancerous Lesion",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:141",
          "areaAffected": "yes details",
          "treatmentAdditional": "Medication",
          "treatmentAdditionalDate": "011980",
          "treatmentAdditionalDetails": "treatment other details",
          "conditionResolved": "Yes",
          "conditionResolvedDate": "011980",
          "malignant": "Yes",
          "surveillance": "Yes",
          "surveillanceType": "Other",
          "surveillanceTypeOther": "Other details"
        },
        {
          "condition": "Crohn\'s Disease",
          "conditionOther": null,
          "id": 2,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:2304"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:2305"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:2306"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:2307"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:2308"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:2309"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:2310"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:2311"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:2312"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:2313"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:2304"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:2305"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Crohn\'s/Ulcerative Colitis",
          "conditionOptions": [
            "Crohn\'s Disease",
            "Proctitis",
            "Ulcerative Colitis",
            "Other"
          ],
          "hasReflexive": true,
          "$$hashKey": "object:142",
          "treatmentAdditional": "Medication",
          "treatmentAdditionalDetails": "other details",
          "symptomsDate": "011980",
          "hadSurgery": "Yes",
          "hadSurgeryType": "Colon Resection",
          "hadSurgeryTypeDetails": "surgery details",
          "hadSurgeryDate": "011980",
          "hasComplications": "Yes",
          "hasComplicationsDetails": "details...",
          "emergencyRoom": "None",
          "disability": "Yes"
        },
        {
          "condition": "B12 Deficiency",
          "conditionOther": null,
          "id": 3,
          "selected": true,
          "reset": false,
          "physicianName": null,
          "physicianAddress": null,
          "physicianPhone": null,
          "hospitalName": null,
          "hospitalAddress": null,
          "hospitalPhone": null,
          "onSetDate": null,
          "duration": null,
          "control": {
            "treatmentOptions": [
              {
                "name": "Chemotherapy",
                "id": 1,
                "selected": true,
                "$$hashKey": "object:2486"
              },
              {
                "name": "CPAP/BIPAP",
                "id": 2,
                "selected": true,
                "$$hashKey": "object:2487"
              },
              {
                "name": "Hospitalization",
                "id": 3,
                "selected": false,
                "$$hashKey": "object:2488"
              },
              {
                "name": "Medication",
                "id": 4,
                "selected": false,
                "$$hashKey": "object:2489"
              },
              {
                "name": "Physiotherapy",
                "id": 5,
                "selected": false,
                "$$hashKey": "object:2490"
              },
              {
                "name": "Radiation",
                "id": 6,
                "selected": false,
                "$$hashKey": "object:2491"
              },
              {
                "name": "Surgery",
                "id": 7,
                "selected": false,
                "$$hashKey": "object:2492"
              },
              {
                "name": "Injections",
                "id": 8,
                "selected": false,
                "$$hashKey": "object:2493"
              },
              {
                "name": "None",
                "id": 9,
                "selected": false,
                "$$hashKey": "object:2494"
              },
              {
                "name": "Other",
                "id": 10,
                "selected": false,
                "$$hashKey": "object:2495"
              }
            ]
          },
          "treatment": [
            {
              "name": "Chemotherapy",
              "id": 1,
              "selected": true,
              "$$hashKey": "object:2486"
            },
            {
              "name": "CPAP/BIPAP",
              "id": 2,
              "selected": true,
              "$$hashKey": "object:2487"
            }
          ],
          "treatmentOther": null,
          "hasOptions": true,
          "name": "Mild Iron Deficiency Anemia",
          "conditionOptions": [
            "B12 Deficiency",
            "Low iron/Iron Deficiency",
            "Other"
          ],
          "$$hashKey": "object:143"
        }
      ]
    },
    "medicalDiagnosticTesting": {
  "testPerformedCheck": "Yes",
  "testPendingCheck": "Yes",
  "otherInjuryCheck": "Yes",
  "testPerformed": [
    {
      "type_x": "Blood Test",
      "result": "Normal",
      "details": null
    }
  ],
  "testPending": {
    "bun": true,
    "car": true,
    "cat": true,
    "cts": true,
    "eye": true,
    "hem": true,
    "her": true,
    "men": true,
    "nas": true,
    "rot": true,
    "rou": true,
    "ult": true,
    "var": true,
    "vas": true,
    "other": true
  },
  "testPendingDetails": "123",
  "otherInjury": [
    {
      "type_x": "Acid Reflux/Indigestion/GERD/Heartburn",
      "details": null
    }
  ],
  "hasAids": "Yes",
  "hasAidsDetails": "123"
},
    "lifestyle": {
      "sports": [
        {
          "name": "Walking",
          "id": 1,
          "selected": true,
          "reset": false,
          "hasOptions": true,
          "hasDetails": false,
          "$$hashKey": "object:3859",
          "frequency": "Daily",
          "hours": "2",
          "minutes": "2"
        },
        {
          "name": "Running",
          "id": 2,
          "selected": true,
          "reset": false,
          "hasOptions": true,
          "hasDetails": false,
          "$$hashKey": "object:3860",
          "frequency": "Daily",
          "hours": "3",
          "minutes": "1"
        }
      ],
      "activites": [
        {
          "name": "Motorcycle racing",
          "id": 1,
          "reset": false,
          "selected": true,
          "$$hashKey": "object:3906"
        },
        {
          "name": "Scuba diving",
          "id": 2,
          "reset": false,
          "selected": true,
          "$$hashKey": "object:3907"
        }
      ],
      "divingTypes": [
        {
          "name": "Recreation",
          "id": 1,
          "selected": true,
          "$$hashKey": "object:4135"
        }
      ],
      "divingDepths": [
        {
          "name": "<30",
          "id": 1,
          "selected": true,
          "number24Months": "1",
          "averageTime24Months": "12",
          "averageTime12Months": "12",
          "number12Months": "2"
        },
        {
          "name": "31-65",
          "id": 2,
          "selected": true,
          "number24Months": "3",
          "number12Months": "4",
          "averageTime24Months": "15",
          "averageTime12Months": "17"
        }
      ],
      "divingOther": [
        {
          "name": "No",
          "id": 2,
          "selected": true,
          "details": "here details...",
          "$$hashKey": "object:4161"
        }
      ],
      "divingAlone": [
        {
          "name": "No",
          "id": 2,
          "selected": true,
          "details": "here details...",
          "$$hashKey": "object:4168"
        }
      ],
      "divingCertified": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "$$hashKey": "object:4174",
          "level": "Master",
          "organization": "ABC"
        }
      ],
      "driving": [
        {
          "name": "Cited for more than 1 violation",
          "id": 1,
          "reset": false,
          "selected": true,
          "$$hashKey": "object:3937"
        }
      ],
      "travelAbroad": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "$$hashKey": "object:3892"
        }
      ],
      "destinations": [
        {
          "$$hashKey": "object:4069",
          "name": "Thailand",
          "purpose": "Business",
          "frequency": "Only Once",
          "duration": "1-7 days"
        }
      ],
      "pilot": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "$$hashKey": "object:3899"
        }
      ],
      "divingTypesDetails": "My details",
      "previouslyDenied": [
        {
          "name": "Yes",
          "id": 1,
          "selected": true,
          "reason": "my details..."
        }
      ],
      "aviationHours": {
    "past": "past 12 m",
    "future": "expected 12 m"
  },
  "aviatorMilitary": "Yes",
  "aviationActivities": [
    {
      "name": "Charter",
      "id": 1,
      "selected": true,
      "reset": false,
      "details": null
    },
    {
      "name": "Freight Transport",
      "id": 2,
      "selected": true,
      "reset": false,
      "details": null
    },
    {
      "name": "Crop Dusting",
      "id": 3,
      "selected": true,
      "reset": false,
      "details": null
    },
    {
      "name": "Instruction",
      "id": 4,
      "selected": true,
      "reset": false,
      "details": null
    },
    {
      "name": "Test",
      "id": 5,
      "selected": true,
      "reset": false,
      "details": null
    },
    {
      "name": "Survey",
      "id": 6,
      "selected": true,
      "reset": false,
      "details": null
    },
    {
      "name": "Sight Seeing",
      "id": 7,
      "selected": true,
      "reset": false,
      "details": null
    },
    {
      "name": "Mapping",
      "id": 8,
      "selected": true,
      "reset": false,
      "details": null
    },
    {
      "name": "Aerobatics",
      "id": 9,
      "selected": true,
      "reset": false,
      "details": null
    },
    {
      "name": "Commercial Photography",
      "id": 10,
      "selected": true,
      "reset": false,
      "details": null
    },
    {
      "name": "Other",
      "id": 11,
      "selected": true,
      "reset": true,
      "details": "developer testing other"
    },
    {
      "name": "I do not participate in any aviation activities",
      "id": 12,
      "selected": true,
      "reset": true,
      "details": null
    }
  ],
  "aviatorMedicalCertificate": {
    "type": "Class III",
    "date": "11/11/1111",
    "denied": "Yes",
    "details": "develope details"
  },
  "aviatorMilitaryDetails": {
    "answer": null,
    "branch": "Other",
    "branchDetails": "develope...",
    "crewMember": "Yes",
    "crewMemberDetails": "details member",
    "duty": "Other",
    "dutyDetails": "test data...",
    "airCraftType": "Other",
    "airCraftTypeDetails": "other test"
  },
  "aviatorReprimanded": {
    "answer": "Yes",
    "details": "testing provide details"
  },
      "aviationLicenses": [
    {
      "name": "Instrument Flight Ratings (IFR)",
      "id": 1,
      "selected": true,
      "reset": false
    },
    {
      "name": "Airline Transport (ATP)",
      "id": 2,
      "selected": true,
      "reset": false
    },
    {
      "name": "Private",
      "id": 3,
      "selected": true,
      "reset": false
    },
    {
      "name": "Student",
      "id": 4,
      "selected": true,
      "reset": false
    },
    {
      "name": "Recreational",
      "id": 5,
      "selected": true,
      "reset": false
    },
    {
      "name": "Certified Flight Instructor",
      "id": 6,
      "selected": true,
      "reset": false
    },
    {
      "name": "Commercial",
      "id": 7,
      "selected": true,
      "reset": false
    },
     {
      "name": "I do not have a pilots license but I am a crew member",
      "id": 8,
      "selected": true,
      "reset": true
    }
  ], 
  "aviationPurposes": [
    {
      "name": "Pleasure",
      "id": 1,
      "selected": true,
      "hoursFlown1": "Pleasure 12 months",
      "hoursFlown2": "hours last 12-24",
      "hoursToFly": "11",
      "lastFlown": "11/11/1111",
      "reset": false
    },
    {
      "name": "Business",
      "id": 2,
      "selected": true,
      "hoursFlown1": "Business 12 months",
      "hoursFlown2": "hours last 12-24",
      "hoursToFly": "22",
      "lastFlown": "12/22/2222",
      "reset": false
    },
    {
      "name": "Commercial",
      "id": 3,
      "selected": true,
      "hoursFlown1": "Commercial 12 months",
      "hoursFlown2": "hours 12-24",
      "hoursToFly": "33",
      "lastFlown": "13/33/3333",
      "reset": false
    },
    {
      "name": "Military",
      "id": 4,
      "selected": true,
      "hoursFlown1": "Military 12 months",
      "hoursFlown2": "last 12-24",
      "hoursToFly": "44",
      "lastFlown": "14/14/1444",
      "reset": false
    }
  ]
    },
    "payment": {
      "paying": [
        {
          "name": "Self",
          "id": 1,
          "selected": true,
          "reset": false,
          "$$hashKey": "object:49"
        }
      ],
      "bankName": "ABC Bank",
      "accountType": "savings",
      "accountNumber": "12345",
      "routingNumber": "123456"
    }
  }
';
    }
}