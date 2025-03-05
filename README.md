# safety-guard
if ($request->submenu_slug == "vehicle-tracking") {
        $filePath = public_path('pdf/vehicle-tracking.pdf');
    } elseif ($request->submenu_slug == "auto-conductor") {
        $filePath = public_path('pdf/auto-conductor.pdf');
    } elseif ($request->submenu_slug == "asset-tracking-software") {
        $filePath = public_path('pdf/asset-tracking.pdf');
    } elseif ($request->submenu_slug == "personal-tracking-software") {
        $filePath = "";
    } elseif ($request->submenu_slug == "fuel-monitoring") {
        $filePath = public_path('pdf/fueel-management.pdf');
    } elseif ($request->submenu_slug == "temperature-monitoring") {
        $filePath = public_path('pdf/temperature-monitoring.pdf');
    } elseif ($request->submenu_slug == "tire-management-system") {
        $filePath = public_path('pdf/tire-management.pdf');
    } elseif ($request->submenu_slug == "container-tracking") {
        $filePath = public_path('pdf/container-tracking.pdf');
    } elseif ($request->submenu_slug == "taxi-management-solutions") {
        $filePath = public_path('pdf/taxi-management.pdf');
    } elseif ($request->submenu_slug == "dispatch-logistics") {
        $filePath = public_path('pdf/dispatch-logistic.pdf');
    } elseif ($request->submenu_slug == "school-bus-fleet-management") {
        $filePath = public_path('pdf/school-bus-fleet-management.pdf');
    } elseif ($request->submenu_slug == "waste-management") {
        $filePath = "";
    } else {
        $filePath = "";
    }