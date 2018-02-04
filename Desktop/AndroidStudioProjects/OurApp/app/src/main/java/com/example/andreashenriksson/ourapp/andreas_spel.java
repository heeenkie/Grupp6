package com.example.andreashenriksson.ourapp;

import android.content.Intent;
import android.graphics.Color;
import android.os.CountDownTimer;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import java.util.Random;
import java.lang.Object;
import java.lang.String;

public class andreas_spel extends AppCompatActivity {


    TextView tv_time;
    Button b_1, b_2, b_3, b_4, b_5, b_6, b_7, b_8, b_9, b_startover, b_start;
    int oldValue = 0, newValue, time= 20, num1, num2, num3, num4, num5, num6, num7, num8, num9;
    CountDownTimer timer;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_andreas_spel);

        b_1 = (Button) findViewById(R.id.b_1);
        b_2 = (Button) findViewById(R.id.b_2);
        b_3 = (Button) findViewById(R.id.b_3);
        b_4 = (Button) findViewById(R.id.b_4);
        b_5 = (Button) findViewById(R.id.b_5);
        b_6 = (Button) findViewById(R.id.b_6);
        b_7 = (Button) findViewById(R.id.b_7);
        b_8 = (Button) findViewById(R.id.b_8);
        b_9 = (Button) findViewById(R.id.b_9);
        b_startover = (Button) findViewById(R.id.b_startover);
        b_start = (Button) findViewById(R.id.b_start);
        tv_time = (TextView) findViewById(R.id.tv_time);



        b_1.setEnabled(false);
        b_2.setEnabled(false);
        b_3.setEnabled(false);
        b_4.setEnabled(false);
        b_5.setEnabled(false);
        b_6.setEnabled(false);
        b_7.setEnabled(false);
        b_8.setEnabled(false);
        b_9.setEnabled(false);












        timer = new CountDownTimer(20000, 1000){
            @Override
            public void onTick(long millisUntilFinished){
                time--;
                tv_time.setText("Time: " + time);
                b_start.setEnabled(false);
            }

            @Override
            public void onFinish() {
                b_1.setEnabled(false);
                b_2.setEnabled(false);
                b_3.setEnabled(false);
                b_4.setEnabled(false);
                b_5.setEnabled(false);
                b_6.setEnabled(false);
                b_7.setEnabled(false);
                b_8.setEnabled(false);
                b_9.setEnabled(false);
                b_start.setEnabled(true);
                time=20;
                tv_time.setText("Time: " + time);
                timer.cancel();

            }

        };


        b_start.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                b_1.setEnabled(true);
                b_2.setEnabled(true);
                b_3.setEnabled(true);
                b_4.setEnabled(true);
                b_5.setEnabled(true);
                b_6.setEnabled(true);
                b_7.setEnabled(true);
                b_8.setEnabled(true);
                b_9.setEnabled(true);

                Random r = new Random();
                num1 = r.nextInt((100-10)+1)+10;
                num2 = r.nextInt((100-10)+1)+10;
                num3 = r.nextInt((100-10)+1)+10;
                num4 = r.nextInt((100-10)+1)+10;
                num5 = r.nextInt((100-10)+1)+10;
                num6 = r.nextInt((100-10)+1)+10;
                num7 = r.nextInt((100-10)+1)+10;
                num8 = r.nextInt((100-10)+1)+10;
                num9 = r.nextInt((100-10)+1)+10;

                String str1 = Integer.toString(num1);
                String str2 = Integer.toString(num2);
                String str3 = Integer.toString(num3);
                String str4 = Integer.toString(num4);
                String str5 = Integer.toString(num5);
                String str6 = Integer.toString(num6);
                String str7 = Integer.toString(num7);
                String str8 = Integer.toString(num8);
                String str9 = Integer.toString(num9);


                b_1.setText(str1);
                b_2.setText(str2);
                b_3.setText(str3);
                b_4.setText(str4);
                b_5.setText(str5);
                b_6.setText(str6);
                b_7.setText(str7);
                b_8.setText(str8);
                b_9.setText(str9);
                timer.start();


            }
            });


        b_1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                b_1.setEnabled(false);
                newValue = num1;
                num1=100;
                if (oldValue<=newValue && newValue <= num1 && newValue <= num2 && newValue <= num3 && newValue <= num4 && newValue <= num5 && newValue <= num6 && newValue <= num7 && newValue <= num8 && newValue <= num9)
                    b_1.setBackgroundColor(Color.parseColor("#00ff00"));
                else{
                    b_1.setBackgroundColor(Color.parseColor("#ff0000"));

                    }
                oldValue=newValue;
            }
        });

        b_2.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_2.setEnabled(false);
                newValue = num2;
                num2=100;
                if (oldValue<=newValue && newValue <= num1 && newValue <= num2 && newValue <= num3 && newValue <= num4 && newValue <= num5 && newValue <= num6 && newValue <= num7 && newValue <= num8 && newValue <= num9)
                    b_2.setBackgroundColor(Color.parseColor("#00ff00"));
                else{
                    b_2.setBackgroundColor(Color.parseColor("#ff0000"));

                    }
                oldValue=newValue;
            }
        });

        b_3.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_3.setEnabled(false);
                newValue = num3;
                num3=100;
                if (oldValue<=newValue && newValue <= num1 && newValue <= num2 && newValue <= num3 && newValue <= num4 && newValue <= num5 && newValue <= num6 && newValue <= num7 && newValue <= num8 && newValue <= num9)
                    b_3.setBackgroundColor(Color.parseColor("#00ff00"));
                else{
                    b_3.setBackgroundColor(Color.parseColor("#ff0000"));

                    }
                oldValue=newValue;
            }

        });

        b_4.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_4.setEnabled(false);
                newValue = num4;
                num4=100;
                if (oldValue<=newValue && newValue <= num1 && newValue <= num2 && newValue <= num3 && newValue <= num4 && newValue <= num5 && newValue <= num6 && newValue <= num7 && newValue <= num8 && newValue <= num9)
                    b_4.setBackgroundColor(Color.parseColor("#00ff00"));
                else{
                    b_4.setBackgroundColor(Color.parseColor("#ff0000"));

                    }
                oldValue=newValue;
            }
        });

        b_5.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_5.setEnabled(false);
                newValue = num5;
                num5=100;
                if (oldValue<=newValue && newValue <= num1 && newValue <= num2 && newValue <= num3 && newValue <= num4 && newValue <= num5 && newValue <= num6 && newValue <= num7 && newValue <= num8 && newValue <= num9)
                    b_5.setBackgroundColor(Color.parseColor("#00ff00"));
                else{
                    b_5.setBackgroundColor(Color.parseColor("#ff0000"));

                    }
                oldValue=newValue;
            }
        });

        b_6.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_6.setEnabled(false);
                newValue = num6;
                num6=100;
                if (oldValue<=newValue && newValue <= num1 && newValue <= num2 && newValue <= num3 && newValue <= num4 && newValue <= num5 && newValue <= num6 && newValue <= num7 && newValue <= num8 && newValue <= num9)
                    b_6.setBackgroundColor(Color.parseColor("#00ff00"));
                else{
                    b_6.setBackgroundColor(Color.parseColor("#ff0000"));

                    }
                oldValue=newValue;
            }
        });

        b_7.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_7.setEnabled(false);
                newValue = num7;
                num7=100;
                if (oldValue<=newValue && newValue <= num1 && newValue <= num2 && newValue <= num3 && newValue <= num4 && newValue <= num5 && newValue <= num6 && newValue <= num7 && newValue <= num8 && newValue <= num9)
                    b_7.setBackgroundColor(Color.parseColor("#00ff00"));
                else{
                    b_7.setBackgroundColor(Color.parseColor("#ff0000"));

                    }
                oldValue=newValue;
            }
        });

        b_8.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_8.setEnabled(false);
                newValue = num8;
                num8=100;
                if (oldValue<=newValue && newValue <= num1 && newValue <= num2 && newValue <= num3 && newValue <= num4 && newValue <= num5 && newValue <= num6 && newValue <= num7 && newValue <= num8 && newValue <= num9)
                    b_8.setBackgroundColor(Color.parseColor("#00ff00"));
                else{
                    b_8.setBackgroundColor(Color.parseColor("#ff0000"));

                    }
                oldValue=newValue;
            }
        });

        b_9.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_9.setEnabled(false);
                newValue = num9;
                num9=100;
                if (oldValue<=newValue && newValue <= num1 && newValue <= num2 && newValue <= num3 && newValue <= num4 && newValue <= num5 && newValue <= num6 && newValue <= num7 && newValue <= num8 && newValue <= num9)
                    b_9.setBackgroundColor(Color.parseColor("#00ff00"));
                else{
                    b_9.setBackgroundColor(Color.parseColor("#ff0000"));

                    }
                oldValue=newValue;

            }
        });


        b_startover.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_1.setEnabled(false);
                b_2.setEnabled(false);
                b_3.setEnabled(false);
                b_4.setEnabled(false);
                b_5.setEnabled(false);
                b_6.setEnabled(false);
                b_7.setEnabled(false);
                b_8.setEnabled(false);
                b_9.setEnabled(false);
                b_1.setBackgroundResource(android.R.drawable.btn_default);
                b_2.setBackgroundResource(android.R.drawable.btn_default);
                b_3.setBackgroundResource(android.R.drawable.btn_default);
                b_4.setBackgroundResource(android.R.drawable.btn_default);
                b_5.setBackgroundResource(android.R.drawable.btn_default);
                b_6.setBackgroundResource(android.R.drawable.btn_default);
                b_7.setBackgroundResource(android.R.drawable.btn_default);
                b_8.setBackgroundResource(android.R.drawable.btn_default);
                b_9.setBackgroundResource(android.R.drawable.btn_default);
                time=20;
                oldValue = 0;
                b_start.setEnabled(true);
                timer.cancel();
                tv_time.setText("Time: " + time);

            }
        });





            }



    }

