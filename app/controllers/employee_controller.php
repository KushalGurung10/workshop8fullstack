<?php
require_once __DIR__ . '/../models/employee.php';

function handleEmployeeRequest()
{
    
    $action = $_GET['action'] ?? '';

    if ($action === 'store') {
        insertEmployee($_POST['name'], $_POST['title'], $_POST['skills']);
        header("Location: index.php?action=index");
        exit;
    }

    
    if ($action === 'update') {
        updateEmployee($_POST['id'], $_POST['name'], $_POST['title'], $_POST['skills']);
        header("Location: index.php?action=index");
        exit;
    }

 
    if ($action === 'delete') {
        deleteEmployee($_GET['id']);
        header("Location: index.php?action=index");
        exit;
    }

  
    if ($action === 'edit') {
        return [
            'view' => 'employee.edit',
            'employee' => getEmployeeById($_GET['id'])
        ];
    }


    if ($action === 'create') {
        return ['view' => 'employee.create'];
    }

    if ($action === 'show') {
        return [
            'view' => 'profile',
            'employee' => getEmployeeById($_GET['id'])
        ];
    }

 
    if ($action === 'index') {
        return [
            'view' => 'employee.index',
            'employees' => getAllEmployees()
        ];
    }

   
    return [
        'view' => 'home', 
    ];
}
