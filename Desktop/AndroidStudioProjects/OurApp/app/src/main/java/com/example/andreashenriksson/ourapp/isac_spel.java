package com.example.andreashenriksson.ourapp;

import android.graphics.Color;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import static android.graphics.Color.GREEN;
import static android.graphics.Color.RED;

public class isac_spel extends AppCompatActivity {

    int counter = 1;
    public Button bt0, bt1, bt2, bt3, bt4, bt5, bt6, bt7, bt8;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.isac_spel);

        bt0 = (Button) findViewById(R.id.bt0);
        bt1 = (Button) findViewById(R.id.bt1);
        bt2 = (Button) findViewById(R.id.bt2);
        bt3 = (Button) findViewById(R.id.bt3);
        bt4 = (Button) findViewById(R.id.bt4);
        bt5 = (Button) findViewById(R.id.bt5);
        bt6 = (Button) findViewById(R.id.bt6);
        bt7 = (Button) findViewById(R.id.bt7);
        bt8 = (Button) findViewById(R.id.bt8);



        bt0.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(counter%2==1){
                    bt0.setBackgroundColor(GREEN);
                }
                else{
                    bt0.setBackgroundColor(RED);
                }
                counter++;
            }
        });

        bt1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(counter%2==1){
                    bt1.setBackgroundColor(GREEN);
                }
                else{
                    bt1.setBackgroundColor(RED);
                }
                counter++;
            }
        });

        bt2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(counter%2==1){
                    bt3.setBackgroundColor(GREEN);
                }
                else{
                    bt3.setBackgroundColor(RED);
                }
                counter++;
            }
        });

        bt3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(counter%2==1){
                    bt3.setBackgroundColor(GREEN);
                }
                else{
                    bt3.setBackgroundColor(RED);
                }

                counter++;
            }
        });

        bt4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(counter%2==1){
                    bt4.setBackgroundColor(GREEN);
                }
                else{
                    bt4.setBackgroundColor(RED);
                }
                counter++;
            }
        });

        bt5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(counter%2==1){
                    bt5.setBackgroundColor(GREEN);
                }
                else{
                    bt5.setBackgroundColor(RED);
                }
                counter++;
            }
        });

        bt6.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(counter%2==1){
                    bt6.setBackgroundColor(GREEN);
                }
                else{
                    bt6.setBackgroundColor(RED);
                }
                counter++;

            }
        });

        bt7.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(counter%2==1){
                    bt7.setBackgroundColor(GREEN);
                }
                else{
                    bt7.setBackgroundColor(RED);
                }
                counter++;
            }
        });

        bt8.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(counter%2==1){
                    bt1.setBackgroundColor(GREEN);
                }
                else{
                    bt8.setBackgroundColor(RED);
                }
                counter++;
            }
        });

    }
}
