<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unep_projects extends Model
{
    use HasFactory;
    public $table = 'unep_projects';
    protected $fillable = [
                    'ProjectID ',
                    'Project_Title',
                    'PAAS_Code',
                    'Approval_Status',
                    'Fund',
                    'PAG_Value',
                    'Start_Date',
                    'End_Date',
                    'Country_ies',
                    'Lead_Org_Unit',
                    'Theme_s',
                    'Donor_s',
                    'Total_Expenditure',
                    'Total_Contribution',
                    'Total_Contribution_Total_Expenditure',
                    'Total_PSC',                   
    ];
}
