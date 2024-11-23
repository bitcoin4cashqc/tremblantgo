package com.tremblantgo.app;

import android.os.Bundle;
import com.getcapacitor.BridgeActivity;
import com.google.firebase.FirebaseApp;

import android.Manifest;
import android.content.pm.PackageManager;
import androidx.core.app.ActivityCompat;

public class MainActivity extends BridgeActivity {
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        // Initialize Firebase
        FirebaseApp.initializeApp(this);
    }

  
}
